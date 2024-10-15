<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Destruction</title>
</head>
<body>
    <?php
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Display a message
    echo "All session variables are now removed, and the session is destroyed.";
    ?>
</body>
</html>
