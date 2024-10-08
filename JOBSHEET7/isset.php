<?php
$umur;
if(isset($umur) && $umur >= 18) {
    echo "anda sudah dewasa.";
} else {
    echo "anda belum dewasa atau varianel 'umur' tidak ditemukan.";
}

$data = array("nama" => "Jane", "usia" => 25);
if(isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "variabel 'nama' tidak ditemukan dalam array.";
}



?>