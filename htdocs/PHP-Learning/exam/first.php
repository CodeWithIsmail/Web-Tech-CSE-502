<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
    <?php
        if (isset($_SESSION["userid"])) 
        {
            echo '<h1 style="text-align: center;">Welcome ' . $_SESSION["userid"] . '</h1>';
        } else {
            echo '<h1 style="text-align: center;">Welcome Guest</h1>';
        }

        if(isset($_COOKIE["userid"])) 
        {
            echo "have some cookies<br>";
        }
    ?>

<a href="logout.php">logout</a>