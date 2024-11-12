<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "config/koneksi.php";
include "fungsi/pesan_kilat.php";
include "fungsi/anti_injection.php";

// Sanitize input
$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

// Prepare the SQL statement
$query = "SELECT username, level, salt, password AS hashed_password FROM user WHERE username = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if ($row) {
    $salt = $row['salt'];
    $hashed_password = $row['hashed_password'];

    // Combine salt and password for verification
    $combined_password = $salt . $password;

    if (password_verify($combined_password, $hashed_password)) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        header("Location: index.php");
        exit;
    } else {
        pesan('danger', "Login gagal. Password Anda Salah.");
        header("Location: login.php");
        exit;
    }
} else {
    pesan('warning', "Username tidak ditemukan.");
    header("Location: login.php");
    exit;
}

// Close the connection
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>