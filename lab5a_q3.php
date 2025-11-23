<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>

<?php
// Function to calculate the area of a rectangle
function calculateArea($width, $height) {
    $area = $width * $height;
    return $area;
}

// Call the function with any values
$width = 4;
$height = 2;
$area = calculateArea($width, $height);

// Display the result
echo "The area of a rectangle with a width of $width and $height is $area";
?>

</body>
</html>
