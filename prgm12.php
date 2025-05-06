<?php
// Define the file path
$filePath = "forFileHandling\mydata.txt";

// Write the string to the file
$content = "This is a test file.";
if (file_put_contents($filePath, $content) !== false) {
    echo "File created successfully at: $filePath";
} else {
    echo "Failed to create the file.";
}
?>
