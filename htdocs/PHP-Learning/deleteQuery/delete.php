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
    $sql="delete from person
    where age=22";
    
    if(mysqli_query($connection,$sql))
    {
        echo "successfully deleted";
    }
    else 
    {
        echo "deletion failed. " . mysqli_error($connection);
    }
    mysqli_close($connection);
?>