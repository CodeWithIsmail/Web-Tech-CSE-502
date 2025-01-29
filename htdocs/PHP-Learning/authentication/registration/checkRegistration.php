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

    // check whether username exists or not
    $val=$_POST["username"];
    $sql="select * from users where uname='$val'";
    $result=mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0) 
    {
        echo "username has already been taken" . "<br>";
        header("location:register.php");
        exit();
    }

    $sql="insert into users values(
        '$_POST[username]','$_POST[password]')";
    if(mysqli_query($connection,$sql)) 
    {
        header("location:successRegister.php");
        exit();
    }
    else header("location:register.php");

?>