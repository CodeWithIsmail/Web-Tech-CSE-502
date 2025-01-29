<?php
include("header.php");
include("menu.php");
?>
<div id="main_content">
<br><br><br>
    <form action="actionpage.php" method="post">
        First Name: <input type="text" name="fname"/> <br>
        Last Name: <input type="text" name="lname"/><br>
        Email: <input type="email" name="email"/><br>
        Phone: <input type="text" name="phone"/><br>
        Address: <textarea name="address" rows="4" cols="50"></textarea><br>
        <input type="submit" name="submit" value="Submit"/><br>
    </form>

</div>
<?php
include("footer.php");
?>