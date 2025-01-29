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

    $sql="insert into person values(
        '$_POST[firstName]','$_POST[lastName]',$_POST[age])";
    
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