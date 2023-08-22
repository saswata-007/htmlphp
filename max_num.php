<?php
$twoDArray = array(
    array(5, 10, 15),
    array(25, 30, 35),
    array(45, 500, 55)
);

$maxNumber = $twoDArray[0][0]; // Initialize with the first element

// Iterate through each row
foreach ($twoDArray as $row) {
    // Iterate through each element in the row
    foreach ($row as $element) {
        if ($element > $maxNumber) {
            $maxNumber = $element; // Update maxNumber if a larger element is found
        }
    }
}

echo "The maximum number in the two-dimensional array is: " . $maxNumber;
?>
