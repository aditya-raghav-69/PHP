<?php
// Initialize an array with random numbers
$randomNumbers = [];

for ($i = 0; $i < 10; $i++) {
    $randomNumbers[] = rand(1, 100); // Generate random numbers between 1 and 100
}

// Print the array before sorting
echo "Array before sorting:<br>";
echo implode("  ", $randomNumbers) . "<br> <br>";

// Sort the array in ascending order
sort($randomNumbers);

echo "Array after sorting in ascending order:<br>";
echo implode("  ", $randomNumbers) . "<br> <br>";

// Sort the array in descending order
rsort($randomNumbers);

echo "Array after sorting in descending order:<br>";
echo implode("   ", $randomNumbers) . "<br> <br>";

?>