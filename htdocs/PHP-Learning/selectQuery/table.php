<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="myDb";

    //connection creation
    $connection=mysqli_connect($servername,$username,$password,$dbname);
    if(!$connection) 
    {
        die("connection failed. " . mysqli_connect_error());  
    }

    // selecty query
    $sql="select * from person";
    $result=mysqli_query($connection,$sql);
    
    echo "<table border='1'>";
    echo "<tr>";
        echo "<th>first name</th>";
        echo "<th>last name</th>";
        echo "<th>age</th>";
    echo "</tr>";
    if(mysqli_num_rows($result)>0)  
    {
        while ($row=mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['firstname'] . "</td>"; 
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "</tr>";
        }
    }
    else 
    {
        echo "0 rows<br>";
    }

    echo "</table>";
    mysqli_close($connection);
?>

