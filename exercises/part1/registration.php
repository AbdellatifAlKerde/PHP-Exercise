<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $fullname = stripslashes($_REQUEST['fullname']);
        $fullname = mysqli_real_escape_string($con, $fullname);

        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $phone = stripslashes($_REQUEST['phone']);
        $date_of_birth = $_REQUEST['birthdate'];
        $social_security_number = $_REQUEST['SSN'];
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (fullname, username, password, email, phone, date_of_birth, social_security_number, create_datetime)
                     VALUES ('$fullname', '$username', '" . md5($password) . "', '$email', $phone, $date_of_birth, $social_security_number, '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="fullname" placeholder="Full Name" required />
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="password" class="login-input" name="confirm password" placeholder="Confirm Password">
        <input type="number" class="login-input" name="phone" placeholder="Phone Number" />
        <input type="date" class="login-input" name="birthdate" placeholder="Birth Date" />
        <input type="number" class="login-input" name="SSN" placeholder="Social Security Number" />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>