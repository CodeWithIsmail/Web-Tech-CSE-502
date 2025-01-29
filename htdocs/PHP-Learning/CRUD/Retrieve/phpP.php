<?php
    $serverName="localhost";
    $userName="root";
    $password="";
    $dbname="crud1";

    // connect with databsase
    $connection=mysqli_connect($serverName,$userName,$password,$dbname);
    //check the connection
    if(!$connection) 
    {
        die("connection failed: " . mysqli_connect_error());
    }
    $val=$_GET["id"];
    $sql="select * from info1 where id>='$val'";
    $result=mysqli_query($connection,$sql);

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>name</th>';
    echo '<th>roll</th>';
    echo '<th>ID</th>';
    echo '</tr>';

    if(mysqli_num_rows($result)>0) 
    {
        while($row=mysqli_fetch_assoc($result)) 
        {
            echo '<tr>';
            echo '<td>' . $row["name"] . '</td>';
            echo '<td>' . $row["roll"] . '</td>';
            echo '<td>' . $row["id"] . '</td>';
            echo '</tr>';
        }
    }
    else echo "no rows";
    echo '</table>';
    mysqli_close($connection);
?>