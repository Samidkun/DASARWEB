<?php 
// $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

// $nilaiLulus = [];

// foreach ($nilaiSiswa as $nilai) {
//     if ($nilai >= 70) {
//         $nilaiLulus[] = $nilai;
//     }
// }

// echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);


// $daftarKaryawan = [
//     ['Alice', 7],
//     ['Bob', 3],
//     ['Charlie', 9],  // Fixed the missing quotation mark here
//     ['David', 5],
//     ['Eva', 6],
// ];

// $karyawanPengalamanLimaTahun = [];

// foreach ($daftarKaryawan as $karyawan) {
//     if ($karyawan[1] > 5) {
//         $karyawanPengalamanLimaTahun[] = $karyawan[0];
//     }
// }

// echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

// $daftarNilai = [
//     'Matematika' => [
//     ['Alice', 85],
//     ['Bob', 92],
//     ['Charlie', 78],
//     ],
//     'Fisika' => [
//     ['Alice', 90],
//     ['Bob', 88],
//     ['Charlie', 75],
//     ],
//     'Kimia' => [
//     ['Alice', 92],
//     ['Bob', 80],
//     ['Charlie', 85],
    
//     ],
    
// ];
    
//     $mataKuliah = 'Fisika';
    
//     echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    
//     foreach ($daftarNilai[$mataKuliah] as $nilai) {
//     echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
//     }

// QUESTION


// Step 1: Define the array with student names and grades
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

// Step 2: Calculate the class average
$totalGrades = 0;
$numStudents = count($daftarNilai);

foreach ($daftarNilai as $nilai) {
    $totalGrades += $nilai[1];
}

$classAverage = $totalGrades / $numStudents;

// Step 3: Print the list of students with grades above the class average
echo "Daftar siswa dengan nilai di atas rata-rata kelas: <br>";

foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $classAverage) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
?>


