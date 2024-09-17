<?php
// Player's points
$points = 620; // Example score

// Check if the player gets additional rewards
$additionalRewards = $points > 500 ? "YES" : "NO";

// Display the results
echo "Player's total score is: $points<br>";
echo "Do players get additional rewards? $additionalRewards<br>";
?>
