<?php

$totalSeats = 45;
$occupiedSeats = 28;


$emptySeats = $totalSeats - $occupiedSeats;


$percentageEmptySeats = ($emptySeats / $totalSeats) * 100;


echo "Total Seats: {$totalSeats} <br>";
echo "Occupied Seats: {$occupiedSeats} <br>";
echo "Empty Seats: {$emptySeats} <br>";
echo "Percentage of Empty Seats: " . number_format($percentageEmptySeats, 2) . "% <br>";
?>
