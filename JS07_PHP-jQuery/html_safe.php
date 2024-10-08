<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <form method="post" action="">
        <label for="input">Input: </label>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize the input
        $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
        echo "Processed input: " . $input . "<br>";

        // Check if the email key exists before accessing it
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            // Validate email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email is valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            } else {
                echo "Invalid email format! 🛑 Please enter a valid email.";
            }
        }
    }
    ?>
</body>
</html>
