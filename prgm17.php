<?php

// Set a cookie named 'preferences' with the value 'theme=light' that expires in 1 hour
setcookie("preferences", "theme=light", time() + 3600, "/");

// Check if the cookie is set and display a message
if (isset($_COOKIE["preferences"])) {
    echo "Cookie 'preferences' is set with value: " . $_COOKIE["preferences"];
} else {
    echo "Cookie 'preferences' has been set and will expire in 1 hour.";
}

?>