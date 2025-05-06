<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb1";    // change the database name to your database name
// check carefully the database name and username and password
// if you are using xampp then the username is root and password is empty and also check if the phpmyadmin is on

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>