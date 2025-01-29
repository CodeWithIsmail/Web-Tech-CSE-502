<?php
session_start(); // Start the session

// Destroy all session data and logout
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to index.php (Homepage) after logout
header("Location: index.php");
exit; // Always call exit after header redirection
?>