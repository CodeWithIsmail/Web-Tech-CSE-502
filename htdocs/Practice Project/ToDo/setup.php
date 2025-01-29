<?php
// Database connection settings
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'todo_list';

try {
    // Create a connection to MySQL server
    $conn = new mysqli($host, $username, $password);

    // Check if connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create the database if it doesn't exist
    $createDBQuery = "CREATE DATABASE IF NOT EXISTS $dbName";
    if ($conn->query($createDBQuery) === TRUE) {
        echo "Database `$dbName` created successfully.<br>";
    } else {
        die("Error creating database: " . $conn->error);
    }

    // Select the database
    $conn->select_db($dbName);

    // Create the `users` table if it doesn't exist
    $createUsersTableQuery = "
    CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password CHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)";


    if ($conn->query($createUsersTableQuery) === TRUE) {
        echo "Table `users` created successfully.<br>";
    } else {
        die("Error creating `users` table: " . $conn->error);
    }

    // Create the `tasks` table if it doesn't exist
    $createTasksTableQuery = "
    CREATE TABLE IF NOT EXISTS tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        status ENUM('Pending', 'Completed') DEFAULT 'Pending',
        due_date DATE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    )";
    if ($conn->query($createTasksTableQuery) === TRUE) {
        echo "Table `tasks` created successfully.<br>";
    } else {
        die("Error creating `tasks` table: " . $conn->error);
    }

    echo "Setup complete!";
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
} finally {
    // Close the connection
    $conn->close();
}
?>
