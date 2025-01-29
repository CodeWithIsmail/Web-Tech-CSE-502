CREATE DATABASE userinfo;
USE userinfo;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

<?php
    $serverName="localhost";
    $userName="root";
    $password="";

    // connect with databsase
    $connection=mysqli_connect($serverName,$userName,$password);

    //check the connection
    if(!$connection) 
    {
        die("connection failed: " . mysqli_connect_error());
    }
    echo "connected successfully<br>"; 

    //create database
    $sql="create database userinfo";
    if(mysqli_query($connection,$sql)) 
    {
        echo "database created successfully";
    }
    else 
    {
        echo "database creation failed. " . mysqli_error($connection);
    }
    mysqli_close($connection);

    $dbname="userinfo";
    $connection=mysqli_connect($serverName,$userName,$password,$dbname);
    $sql="create table user(
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL)";
        
    if(mysqli_query($connection,$sql)) 
    {
        echo "table created successfully";
    }
    else 
    {
        echo "table creation failed. " . mysqli_error($connection);
    }
    mysqli_close($connection);
?>