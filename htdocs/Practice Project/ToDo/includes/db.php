<?php
// Database connection settings
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'todo_list';
try {
    // Create a connection to the MySQL database
    $conn = new mysqli($host, $username, $password, $dbName);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Uncomment the below line if you want to confirm the connection during debugging
    echo "Connected successfully to the database.";
} catch (Exception $e) {
    // Catch any exceptions and show an error message
    die("An error occurred while connecting to the database: " . $e->getMessage());
}
?>
