<?php
require("db_config.php");
include("header.php");
include("menu.php");
?>
<div id="main_content">

<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "select * from `user`";

//echo $sql;

if ($result = $conn->query($sql)) {
  //echo "Query executed successfully";
}
if ($result->num_rows > 0) {
// // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " -Email: ". $row["email"]. " - Mobile Number: " . $row["mobile"]. " - Address: " . $row["address"]. " <a style='color:white;' href='details.php?id=" . $row["id"] . "'>detail</a> |  <a style='color:white;' href='delete.php?id=" . $row["id"] . "'>delete</a> |  <a style='color:white;' href='edit.php?id=" . $row["id"] . "'>edit</a><br>";
//     }
echo "<table border='1' style='border-collapse: collapse; width: 100%; text-align: left;'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Actions</th>
      </tr>";

// Example of iterating through rows fetched from the database
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["firstname"] . " " . $row["lastname"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["mobile"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "<td>
            <a style='color:white; background-color:blue; padding: 4px 8px; text-decoration: none;' href='details.php?id=" . $row["id"] . "'>Detail</a> |
            <a style='color:white; background-color:red; padding: 4px 8px; text-decoration: none;' href='delete.php?id=" . $row["id"] . "'>Delete</a> |
            <a style='color:white; background-color:green; padding: 4px 8px; text-decoration: none;' href='edit.php?id=" . $row["id"] . "'>Edit</a>
          </td>";
    echo "</tr>";
}

echo "</table>";

} else {
echo "0 results";
}
$conn->close();
?>


</div>
<?php
include("footer.php");
?>