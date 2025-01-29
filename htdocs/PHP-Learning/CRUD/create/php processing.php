<?php
    $serverName="localhost";
    $userName="root";
    $password="";
    $dbname="crud1";

    // connect with databsase
    $connection=mysqli_connect($serverName,$userName,$password,$dbname);
    //check the connection
    if(!$connection) 
    {
        die("connection failed: " . mysqli_connect_error());
    }
    
    $sql="insert into info1 values
    ('$_POST[n]','$_POST[r]','$_POST[id]')";

    if(mysqli_query($connection,$sql)) 
    {
        echo "value inserted";
    }
    mysqli_close($connection);
?>