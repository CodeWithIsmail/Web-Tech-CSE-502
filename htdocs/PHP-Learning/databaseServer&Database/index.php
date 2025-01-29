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
    $sql="create database myDb";
    if(mysqli_query($connection,$sql)) 
    {
        echo "database created successfully";
    }
    else 
    {
        echo "database creation failed. " . mysqli_error($connection);
    }
    mysqli_close($connection);
?>