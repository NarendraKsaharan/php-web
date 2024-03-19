<?php
include_once('config-user.php');

$data = $_POST;

$name = $data['name'];
$email = $data['email'];
$password = $data['password'];
$cpassword  = $data['cpassword'];

if ($cpassword == $password) {
    
    $checkQuery = "SELECT email FROM `users` WHERE email = '$email'";
    $checkEmail = $con->query($checkQuery);

    if ($checkEmail->num_rows) {
        
        $_SESSION['error'] = "email already exits";
        header("location: registration.php");
    } else {
        if ($name && $email && $password) {
            $password = md5($password);
            $selQuery = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
            $con->query($selQuery);

            $_SESSION['success'] = "Account created Login Here!";
            header("location: index.php");
        } else {
            $_SESSION['error'] = "Something went wrong.";
            header("location: registration.php");
        }
    }
} else {
    header("location: registration.php");
    $_SESSION['error'] = "Password dosen't match";
    
}

?>