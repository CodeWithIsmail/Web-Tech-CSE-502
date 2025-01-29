<?php
    session_start();
    if(isset($_SESSION["un"]) and isset($_SESSION["pass"])) 
    {
        echo "successfully logged in";
        //header("location:view.php");
    }
    else 
    {
        header("location:main_login.php");
    }
?>

<html>
<head></head>
<body>
<?php include("layout.php");?>
    <p>home page</p>
</body>