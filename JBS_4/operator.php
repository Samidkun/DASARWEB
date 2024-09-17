<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: {$hasilTambah} <br>";
echo "Hasil Pengurangan: {$hasilKurang} <br>";
echo "Hasil Perkalian: {$hasilKali} <br>";
echo "Hasil Pembagian: {$hasilBagi} <br>";
echo "Sisa Pembagian: {$sisaBagi} <br>";
echo "Hasil Pangkat: {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama (a == b): " . ($hasilSama ? 'True' : 'False') . " <br>";
echo "Hasil Tidak Sama (a != b): " . ($hasilTidakSama ? 'True' : 'False') . " <br>";
echo "Hasil Lebih Kecil (a < b): " . ($hasilLebihKecil ? 'True' : 'False') . " <br>";
echo "Hasil Lebih Besar (a > b): " . ($hasilLebihBesar ? 'True' : 'False') . " <br>";
echo "Hasil Lebih Kecil Sama (a <= b): " . ($hasilLebihKecilSama ? 'True' : 'False') . " <br>";
echo "Hasil Lebih Besar Sama (a >= b): " . ($hasilLebihBesarSama ? 'True' : 'False') . " <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b): " . ($hasilAnd ? 'True' : 'False') . " <br>";
echo "Hasil OR (a || b): " . ($hasilOr ? 'True' : 'False') . " <br>";
echo "Hasil NOT a (!a): " . ($hasilNotA ? 'True' : 'False') . " <br>";
echo "Hasil NOT b (!b): " . ($hasilNotB ? 'True' : 'False') . " <br>";

$a += $b;
echo "Hasil Penambahan (a += b): {$a} <br>";

$a -= $b;
echo "Hasil Pengurangan (a -= b): {$a} <br>";

$a *= $b;
echo "Hasil Perkalian (a *= b): {$a} <br>";

$a /= $b;
echo "Hasil Pembagian (a /= b): {$a} <br>";

$a %= $b;
echo "Sisa Pembagian (a %= b): {$a} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik (a === b): " . ($hasilIdentik ? 'True' : 'False') . " <br>";
echo "Hasil Tidak Identik (a !== b): " . ($hasilTidakIdentik ? 'True' : 'False') . " <br>";
?>
