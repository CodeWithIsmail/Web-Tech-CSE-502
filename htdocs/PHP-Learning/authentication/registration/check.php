<?php
    $servername="localhost";
    $user="root";
    $password="";
    $dbname="test1";
    $connection=mysqli_connect($servername,$user,$password,$dbname);
    if(!$connection) 
    {
        die("connection failed. " . mysqli_error($connection));
    }

    $sql="select * from users";
    $result=mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0) 
    {
        while($row=mysqli_fetch_assoc($result)) 
        {
            echo $row["uname"] . " " . $row["password"] . "<br>";
        }
    }

    mysqli_close($connection);
?>
