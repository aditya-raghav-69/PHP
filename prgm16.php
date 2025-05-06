<?php

// Start or resume the session
// This is necessary to access session variables
session_start();

// Check if the 'user_status' session variable is set
if (isset($_SESSION['user_status'])) {
    // If set, display its value
    echo "The value of the 'user_status' session variable is: " . $_SESSION['user_status'];
} else {
    // If not set, display a message
    echo "The 'user_status' session variable is not set.";
}

?>
