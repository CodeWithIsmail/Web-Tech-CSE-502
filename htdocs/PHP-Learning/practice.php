<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "who are you?";?></title>
</head>
<body>
    <?php
    $friends = array("ddc","uiit","eryt","mvnb");
    echo $friends[0]; 
    echo "<br>";
    echo $friends[1]; 
    echo "<br>";
    echo $friends[2]; 
    echo "<br>";
    echo $friends[3]; 
    echo "<br>"; 
    for($i=0;$i<count($friends);$i++) 
    {
        echo $friends[$i];
        echo " ";
    }
    echo "<br>";
    foreach($friends as $item) 
    {
        echo $item . "<br>";
    }
    //associative array
    $arr=array("a"=>1,"b"=>2,4=>"s");
    echo $arr["a"];
    echo "<br>";
    echo $arr[4];
    echo "<br>";

    foreach($arr as $key=>$value)
    {
        echo "value is $key = $value <br>";
    }

    ?>
    
    <?php
    $a=6;
    
    if(($a%2)==0) 
    {
        echo "$a is an even number";
    }
    else 
    {
        echo "$a is an odd number";
    }
    echo "<br>";
    switch($a)
    {
        case 4:
            echo "YOU ARE 4";
            break;
        case 6:
            echo "you are 6";
            break;
        default:
            echo "you are nothing";
            break;
    }
    ?>
</body>
</html>
