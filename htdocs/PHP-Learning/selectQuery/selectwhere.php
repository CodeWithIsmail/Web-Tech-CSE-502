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
    $sql="select * from person
    where age>=25 and age<=50";
    $result=mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0) 
    {
        while($row=mysqli_fetch_assoc($result)) 
        {
            echo $row["firstname"] . " " . $row["lastname"] . " " . $row["age"] . "<br>";
        }
    }
    else 
    {
        echo "0 row";
    }
?>