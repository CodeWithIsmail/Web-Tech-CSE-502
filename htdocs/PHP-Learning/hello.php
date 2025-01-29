<?php
    //echo "<h1>hello world</h1>"; 
    //print "<h1>hello world</h1>"; 

    // $x=10;
    // $y=20;
    // $z=$x+$y;
    // echo $z; 

    // for($i=0;$i<10;$i++) 
    // {
    //     echo $i . " ";
    // }

    // $i=0;
    // while ($i < 10) {
    //     echo $i . " ";
    //     $i++;
    // } 

    // $num=10;
    // if($num%2==0) 
    // {
    //     echo "even";
    // }
    // else 
    // {
    //     echo "odd";
    // }

    // $str="hello";
    // switch ($str) {
    //     case "hello":
    //         echo "hello world";
    //         break;
    //     case "hello1":
    //         echo "hello world 1";
    //         break;
    //     default:
    //         echo "default case";
    //         break;
    // } 

    // function add($num1,$num2) 
    // {
    //     return $num1+$num2;
    // }

    // $result=add(3,5);
    // echo $result; 

    // $arr=array("item1","item2","item3",1301);
    // $len=count($arr);
    // for($i=0;$i<$len;$i++) 
    // {
    //     echo $arr[$i] . " ";
    // }

    //associative array
    // $names=array("james"=>34, "allen"=>45,"tom"=>36);
    // //echo $names["james"]; 
    // foreach($names as $key=>$value) 
    // {
    //     echo $key . " => " . $value . "<br>";
    // }

    //multi-dimensional array
    // $twoD=array(
    //     array(1,2,3),
    //     array(4,5.5,6),
    //     array(100,200,"outlier")
    // );
    // //echo $twoD[2][2];
    // $out=count($twoD);
    // for($i=0;$i<$out;$i++)
    // {
    //     $in=count($twoD[$i]);
    //     for($j=0;$j<$in;$j++) 
    //     {
    //         echo $twoD[$i][$j] . " ";
    //     }
    //     echo "<br>";
    // } 

    //foreach
    $items=array("item1","item2","item3");
    foreach($items as $item) 
    {
        echo $item . " ";
    }
?>