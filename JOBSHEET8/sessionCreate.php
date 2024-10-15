<?php
session_start();
$_SESSION["favcolor"] = "green"; 
$_SESSION["favanimal"] = "cat"; 
echo "Session variables are set.";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <h2>Session Variables</h2>
    <p>Favorite Color: <?php echo $_SESSION["favcolor"]; ?></p>
    <p>Favorite Animal: <?php echo $_SESSION["favanimal"]; ?></p>
</body>
</html>
