<?php

// Database connection details
$servername = "localhost"; // Your server name
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "mydb1";         // Your database name

// Attempt to establish the database connection using a try-catch block
try {
    // Create connection
    // The mysqli constructor can throw an exception on failure in newer PHP versions,
    // or you can explicitly check connect_error within the try block.
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection explicitly if the constructor doesn't throw exceptions
    if ($conn->connect_error) {
        // Throw an exception if connection failed
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // If connection is successful, you can perform database operations here
    echo "Database connection established successfully!";

    // Example: Close the connection when done
    $conn->close();

} catch (Exception $e) {
    // Catch any exceptions that occurred during the connection attempt
    // Display a meaningful error message without exposing sensitive details
    echo "An error occurred while trying to connect to the database. Please try again later.";
    // For debugging purposes, you might log the actual error:
    // error_log("Database connection error: " . $e->getMessage());
}

?>
