<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width">
        <title>Rectangle Area Calculator</title>
</head>

<?php
// Define the function to calculate the area of a rectangle
function calculateArea($width, $height) {
    // Calculate the area
    $area = $width * $height;
    // Return the calculated area
    return $area;
}

// Call the function with sample values
$width = 4;  // Example width
$height = 2;  // Example height

// Store the result of the function call
$area = calculateArea($width, $height);

// Display the result
echo "The area of the rectangle with width $width and height $height is $area";
?>