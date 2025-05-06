<?php

// Database connection details
$servername = "localhost"; // Your server name (e.g., "localhost")
$username = "root";        // Your database username
$password = "";            // Your database password (empty string)
$dbname = "mydb1";         // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// SQL query to select ALL columns from the students table
$sql = "SELECT * FROM students";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful and if there are rows
if ($result) {
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<h2>Student Records:</h2>";
        echo "<table border='1'>"; // Simple table for display
        echo "<tr><th>Roll No</th><th>Student Name</th><th>Stream</th><th>Result</th></tr>"; // Table headers

        // Use fetch_row() to retrieve data as a numerically indexed array
        while($row = $result->fetch_row()) {
            echo "<tr>";
            // Display data for each column using numeric index (0, 1, 2, 3...)
            // Index corresponds to the order of columns in SELECT * (roll_no, student_name, stream, result)
            echo "<td>" . $row[0] . "</td>"; // roll_no
            echo "<td>" . $row[1] . "</td>"; // student_name
            echo "<td>" . $row[2] . "</td>"; // stream
            echo "<td>" . $row[3] . "</td>"; // result
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results found in the students table.";
    }
} else {
    // Display an error if the query failed
    echo "Error executing query: " . $conn->error;
}

// Close the database connection
$conn->close();

?>
