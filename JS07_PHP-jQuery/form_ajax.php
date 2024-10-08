<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    
</head>
<body>
    <h2>Form Contoh</h2>
    <form id="myForm">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah" required>
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>

        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil" style="display:none;">
        <!-- Hasil akan ditampilkan di sini -->
    </div>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (e) {
                e.preventDefault(); // Mencegah pengiriman form secara default

                // Mengumpulkan data form
                var formData = $("#myForm").serialize();

                // Kirim data ke server PHP
                $.ajax({
                    url: "", // Tetap di halaman yang sama
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        // Tampilkan hasil dari server di div "hasil"
                        $("#hasil").html(response).show(); // Menampilkan hasil
                    }
                });
            });
        });
    </script>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = $_POST['buah'];
        
        if (isset($_POST['warna'])) {
            $selectedWarna = $_POST['warna'];
        } else {
            $selectedWarna = [];
        }
        
        $selectedJenisKelamin = $_POST['jenis_kelamin'];
        
        echo "<script>
                document.getElementById('hasil').innerHTML = 'Anda memilih buah: " . htmlspecialchars($selectedBuah) . "<br>';
              ";
        
        if (!empty($selectedWarna)) {
            echo "document.getElementById('hasil').innerHTML += 'Warna favorit Anda: " . htmlspecialchars(implode(", ", $selectedWarna)) . "<br>'; ";
        } else {
            echo "document.getElementById('hasil').innerHTML += 'Anda tidak memilih warna favorit.<br>'; ";
        }
        
        echo "document.getElementById('hasil').innerHTML += 'Jenis kelamin Anda: " . htmlspecialchars($selectedJenisKelamin) . "';
              document.getElementById('hasil').style.display = 'block'; 
              </script>";
    }
    ?>
</body>
</html>
