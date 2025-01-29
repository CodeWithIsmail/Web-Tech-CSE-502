<?php
    $cookiename="user";
    $cookievalue="tom";
    $cookietime=time()+(60*60*24*3);
    setcookie($cookiename,$cookievalue,$cookietime);

    if(count($_COOKIE)>0) 
    {
        echo "cookie is enabled";
    }
    else 
    {
        echo "no cookie is set";
    }
    echo "<br>";
    setcookie($cookiename,"",time()-3600);
    if(count($_COOKIE)>0) 
    {
        echo "cookie is enabled";
    }
    else 
    {
        echo "no cookie is set";
    }
?>