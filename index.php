<?php
session_start();

$username = "user";
$password = "password"; 

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location:loginsuccess.php");
    exit(); 
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['loggedin'] = true;
        header("location:loginsuccess.php");
        exit(); 
    } else {
        echo "Username or password is incorrect";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<form method="post" action="index.php">
   Username: <br>
   <input type="text" name="username" required><br>
   Password: <br>
   <input type="password" name="password" required><br> 
   <input type="submit" value="Login">
</form>
</body>
</html>
