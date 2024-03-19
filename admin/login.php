<?php
include_once('config-user.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);

$email = $data['name'];
$password = $data['password'];

if ($email && $password) {
    
    $password = md5($password);
    $selQuery = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
    $selUser = $con->query($selQuery);

    if ($selUser->num_rows) {
        
        $user = $selUser->fetch_assoc();

        // print_r($user);
        // echo "<br>";
        // print_r($user['name']);
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['username'] = $user['name'];

        header("location: dashboard.php");
    } else {
        $_SESSION['error'] = "pls fill correct detail";
        header("location: index.php");
    }
} else {
    header("location: index.php"); 
}

?>







