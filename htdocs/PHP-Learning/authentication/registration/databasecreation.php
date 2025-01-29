<?php
    $servername="localhost";
    $user="root";
    $password="";

    // connection building
    $connection=mysqli_connect($servername,$user,$password);
    if(!$connection) 
    {
        die("connection failed. " . mysqli_connect_error());
    }

    $sql="create database test1";
    if(!mysqli_query($connection,$sql)) 
    {
        die("database creation failed. " . mysqli_error($connection));
    }
    mysqli_close($connection);
    $dbname="test1";
    $connection=mysqli_connect($servername,$user,$password,$dbname);
    if(!$connection) 
    {
        die("connection failed. " . mysqli_error($connection));
    }

    $sql="create table users(
        uname varchar(50),
        password varchar(50))";
    
    if(!mysqli_query($connection,$sql)) 
    {
        echo "table creation failed. " . mysqli_error($connection);
    }
    mysqli_close($connection);
?>