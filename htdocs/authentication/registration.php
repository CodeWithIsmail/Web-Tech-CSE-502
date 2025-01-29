<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
<div class="registration-form">
    <h2 class="form-title">Registration</h2>

    <?php
    if (isset($_POST["register-btn"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();
        if (empty($fullname) || empty($email) || empty($password) || empty($password2)) {
            array_push($errors, "All fields are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        }
        if (strlen($password) < 8) {
            array_push($errors, "Password must be at least 8 characters");
        }
        if ($password != $password2) {
            array_push($errors, "Passwords do not match");
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {


        }


    }
    ?>

    <form action="registration.php" method="post">
        <div class="form-group">
            <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" name="password2" class="form-control" placeholder="Confirm Password" required>
        </div>
        <div class="form-group">
            <button type="submit" name="register-btn" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>


<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>



