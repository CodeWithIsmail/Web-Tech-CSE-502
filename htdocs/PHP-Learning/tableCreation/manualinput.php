<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="myDb";

    //create connection
    $connection=mysqli_connect($servername,$username,$password,$dbname);
    if(!$connection) 
    {
        die("connection failed." . mysqli_connection_error());
    }

    //create table schema
    $sql="create table person(
        firstname varchar(30),
        lastname varchar(30),
        age int)";
    
    if(mysqli_query($connection,$sql)) 
    {
        echo "table created successfully";
    }
    else 
    {
        die("table creation failed." . mysqli_error($connection));
    }

    //insert value into table
    $sql="insert into person 
    values('peter','griffin',25)"; 
    if(mysqli_query($connection,$sql)) 
    {
        echo "value inserted successfully";
    }
    else 
    {
        echo "error occurred." . mysqli_error($connection);
    }
    mysqli_close($connection);
?>