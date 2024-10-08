<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $errors = array();

    // Validate Name
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validate Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validate Password
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus terdiri dari minimal 8 karakter.";
    }

    // If there are errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Process the valid data (e.g., store in database, send email, etc.)
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}
?>
