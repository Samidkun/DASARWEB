<?php
$umur;
if (isset($umur)&& $umur >= 18) {
    echo "Anda Sudah dewasa.";
} else {
    echo "anda belum dewasa atau variabel 'umur' tidak ditemukan. ";
}

$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: ".$data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}

?>