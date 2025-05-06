<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data for the new student record
$studentName1 = "Dakota Johnson";
$stream1 = "Physics";
$result1 = "fail";

$studentName2 = "John Doe";
$stream2 = "Chemistry";
$result2 = "pass";

$studentName3 = "Alice Johnson";
$stream3 = "Mathematics";
$result3 = "pass";

// SQL queries
$sql1 = "INSERT INTO students (student_name, stream, result) VALUES ('$studentName1', '$stream1', '$result1')";
$sql2 = "INSERT INTO students (student_name, stream, result) VALUES ('$studentName2', '$stream2', '$result2')";
$sql3 = "INSERT INTO students (student_name, stream, result) VALUES ('$studentName3', '$stream3', '$result3')";

// Execute the queries
if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();

?>
