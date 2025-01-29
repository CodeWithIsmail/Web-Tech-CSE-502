<?php
// Database connection settings
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'todo_list';
try {
    $conn = new mysqli($host, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

//    echo "Setup complete!";
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>
