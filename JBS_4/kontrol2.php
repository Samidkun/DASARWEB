<?php
// Original price
$hargaAsli = 120000;

// Discount percentage
$diskonPersen = 20;

// Check if the purchase qualifies for a discount
if ($hargaAsli > 100000) {
    // Calculate the discount amount
    $diskon = ($diskonPersen / 100) * $hargaAsli;
    
    // Calculate the final price after discount
    $hargaSetelahDiskon = $hargaAsli - $diskon;
} else {
    // No discount applicable
    $hargaSetelahDiskon = $hargaAsli;
}

// Display the result
echo "Harga yang harus dibayar setelah diskon adalah: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";
?>
