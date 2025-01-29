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
    $sql="create database crud1";
    if(mysqli_query($connection,$sql)) 
    {
        echo "database created successfully";
    }
    else 
    {
        echo "database creation failed. " . mysqli_error($connection);
    }
    mysqli_close($connection);

    $dbname="crud1";
    $connection=mysqli_connect($serverName,$userName,$password,$dbname);
    $sql="create table info1(
        name varchar(50),
        roll varchar(10),
        id varchar(10))";
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