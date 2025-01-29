<?php
    setcookie("man","tom",time()+3600);

    if(isset($_COOKIE["man"]))  
    {
        $value=$_COOKIE["man"];
        $time=time()+(3600*24*3);
        setcookie("user",$value,$time);
        $value="value is " . $value;
        echo $value;
    }
    else echo "COOKIE IS NOT SET";
    // echo $value;
?>