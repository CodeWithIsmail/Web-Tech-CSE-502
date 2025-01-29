<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>

<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST')
    {   
        $serverName="localhost";
        $userName="root";
        $password="";
        $dbname="userinfo";

        $connection=mysqli_connect($serverName,$userName,$password,$dbname);
        //check the connection
        if(!$connection) 
        {
            die("connection failed: " . mysqli_connect_error());
        }
        $userName=$_POST["uname"];
        $password=$_POST["pass"];
        $remember=isset($_POST["remember"]);

        $sql="select username from user where username='$userName' and password='$password'";
        $result=mysqli_query($connection,$sql);

        if(mysqli_num_rows($result)>0) 
        {
            $row=mysqli_fetch_assoc($result);
            $_SESSION["userid"]=$row["username"];

            if($remember) 
            {
                setcookie("userid",$row["username"],time()+(86400),"/");
            }

            header("Location:first.php");
            exit();
        }
        else echo "invalid username or password";
        
        mysqli_close($connection);
    }
?>


<form action="login.php" method="post">
    <label for="username">Username</label><br>
    <input type="text" id="username" name="uname"><br>
    <label for="password">Password</label><br>
    <input type="text" id="password" name="pass"><br>
    <input type="checkbox" id="remember" name="remember">
    <label for="remember">Remember Me</label>

    <input type="submit" value="Log In">
</form> 
</body></html>