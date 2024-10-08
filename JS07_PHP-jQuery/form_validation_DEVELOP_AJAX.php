<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="response-message" style="color: green;"></div> <!-- Message area for response -->

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Prevent default form submission
                
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Reset error messages
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text(""); // Clear previous password error
                $("#response-message").text(""); // Clear previous response messages

                // Validate nama
                if (nama.trim() === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                // Validate email
                if (email.trim() === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!validateEmail(email)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                }

                // Validate password
                if (password.length < 8) {
                    $("#password-error").text("Password harus terdiri dari minimal 8 karakter.");
                    valid = false;
                }

                // If valid, send data via AJAX
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php", // Ensure this path is correct
                        type: "POST",
                        data: { nama: nama, email: email, password: password },
                        success: function(response) {
                            $("#response-message").html(response); // Display response message
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error("AJAX Error: ", textStatus, errorThrown); // Log errors
                            $("#response-message").text("Terjadi kesalahan saat mengirim data: " + textStatus);
                        }
                    });
                }
            });
        });

        // Function to validate email format
        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>
</body>
</html>
