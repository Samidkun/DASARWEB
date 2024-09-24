<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Dosen Info</title>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        echo "<table border='1' cellpadding='5'>";
        echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
        echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
        echo "</table>";
    ?>
</body>
</html>
