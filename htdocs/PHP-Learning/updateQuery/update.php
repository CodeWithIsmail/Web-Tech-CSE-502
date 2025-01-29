<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="myDb";

    //connection creation
    $connection=mysqli_connect($servername,$username,$password,$dbname);
    if(!$connection) 
    {
        die("connection failed. " . mysqli_connect_error());  
    }

    // q age >=25 <=50
    $sql="update person set age=40
    where lastname='shane'";
    
    if(mysqli_query($connection,$sql))
    {
        echo "successfully updated";
    }
    else 
    {
        echo "updation failed. " . mysqli_error($connection);
    }
    mysqli_close($connection);
?>