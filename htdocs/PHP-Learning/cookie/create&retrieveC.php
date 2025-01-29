<?php
   $cookiename="user";
   $cookievalue="tom";
   $cookietime=time()+(60*60*24*3);
   setcookie($cookiename,$cookievalue,$cookietime);
   
   if(isset($_COOKIE[$cookiename])) 
   {
        echo $cookiename . ": " . $cookievalue . "<br>";
   }
   else 
   {
        echo $cookiename . " is not set." . "<br>";
   }
?>