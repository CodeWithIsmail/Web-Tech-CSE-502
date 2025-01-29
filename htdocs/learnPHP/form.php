<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
    <label>username:</label>
    <br>
    <input type="text" name="uname">
    <br>
        <label>password:</label>
    <br>
    <input type="password" name="pass">
    <br>
        <input type="submit" value="submit">
</form>
<?php
$uname = $_POST["uname"];
$pass = $_POST["pass"];
echo "your username is $uname and password is $pass";

?>
</body>
</html>