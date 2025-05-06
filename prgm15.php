<?php

// Start the session
// This function must be called before any output is sent to the browser
session_start();

// Set a session variable named 'user_status'
$_SESSION['user_status'] = 'logged_in';

// Optional: Display a confirmation message
echo "Session started and 'user_status' variable set to: " . $_SESSION['user_status'];

?>
