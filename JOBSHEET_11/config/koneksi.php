<?php
date_default_timezone_set("Asia/Jakarta");

// Membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Cek apakah koneksi berhasil
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
    
}
?>
