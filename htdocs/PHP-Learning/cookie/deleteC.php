<?php
    setcookie("user","",time()-(60*60*24*4));

    if(isset($_COOKIE["user"])) 
    echo "cookie exists";
    else
    echo "cookie is deleted";
?>