<?php

// Define the file path
$filePath = "forFileHandling/mydata.txt";

// Check if the file exists and display its contents
if (file_exists($filePath)) {
    $fileContent = file_get_contents($filePath);

    if ($fileContent != false) {
        echo "Contents of the file 'mydata.txt':<br>";
        echo nl2br(htmlspecialchars($fileContent)); // Convert newlines to <br> for browser display
    } else {
        echo "Failed to read the file '$filePath'.";
    }
} else {
    echo "The file '$filePath' does not exist.";
}

?>