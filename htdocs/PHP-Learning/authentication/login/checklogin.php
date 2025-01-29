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

    $username=$_POST['myusername'];
    $password=$_POST['mypassword'];

    $sql="select * from users where uname='$username' and password='$password'";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0) 
    {
        session_start();
        $_SESSION["un"]=$username;
        $_SESSION["pass"]=$password;
        header("location:loginSuccess.php");
        exit();
    }
    else 
    {
        echo "wrong username or password";
    }
?>