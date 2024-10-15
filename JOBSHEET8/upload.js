$(document).ready(function() {
    $('#upload-form').submit(function(e) {
        e.preventDefault(); // Mencegah form dari pengiriman default
        var formData = new FormData(this); // Membuat objek FormData dengan data dari form

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response); // Menampilkan respons dari server
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.'); // Menampilkan pesan kesalahan
            }
        });
    });
});
