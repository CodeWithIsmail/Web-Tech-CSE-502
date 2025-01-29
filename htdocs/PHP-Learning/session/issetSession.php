<?php
    session_start();
    $_SESSION["name"]="tom";
    if(isset($_SESSION["name"])) 
    {
        echo  "welcome " . $_SESSION["name"];
    }
    else echo "you are not logged in";
?>