<?php
    session_start();

    $_SESSION["favcolor"]="yellow";
    echo $_SESSION["favcolor"] . "<br>";
    echo $_SESSION["favanimal"] . "<br>";
?>