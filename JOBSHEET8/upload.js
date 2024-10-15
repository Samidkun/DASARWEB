$(document).ready(function() {
    // Disable the upload button initially
    $('#upload-button').prop('disabled', true).css('opacity', 0.5);

    // Enable the upload button when a file is selected
    $('#file').change(function() {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    // Handle the form submission
    $('#upload-form').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        var formData = new FormData(this); // Create a FormData object with the form data

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response); // Display the server response
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.'); // Show error message
            }
        });
    });
});
