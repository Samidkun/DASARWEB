<?php
// Array of grades from 10 students
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Step 1: Sort the array in ascending order
sort($grades);

// Step 2: Remove the two highest and two lowest grades
$grades = array_slice($grades, 2, -2); // Remove first 2 and last 2 elements

// Step 3: Calculate the total of the remaining grades
$total = array_sum($grades);

// Step 4: Display the result
echo "The total of the remaining grades after removing the two highest and two lowest is: $total";
?>
