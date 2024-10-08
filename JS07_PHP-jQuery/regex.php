<?php
// Menampilkan semua kesalahan
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Pencocokan digit
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; // Menampilkan digit yang ditemukan
} else {
    echo "Tidak ada yang cocok!<br>";
}

// Penggantian teks
$pattern = '/apple/'; 
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: "I like banana pie."
?>
