<?php
// // Numeric value for grading
// $nilaiNumerik = 92;

// // Determine and display the letter grade
// if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
//     echo "Nilai huruf A <br>";
// } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
//     echo "Nilai huruf B <br>";
// } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
//     echo "Nilai huruf C <br>";
// } else {
//     echo "Nilai huruf D <br>";
// }


// $jarakSaatIni = 0;
// $jarakTarget = 500;
// $peningkatanHarian = 30;
// $hari = 0;


// while ($jarakSaatIni < $jarakTarget) {
//     $jarakSaatIni += $peningkatanHarian;
//     $hari++;
// }

// echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
// 

// 

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}