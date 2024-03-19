<?php
include_once('config-user.php');
include_once('auth.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);
// die;

$id = $data['id'];
$name = $data['name'];
$email = $data['email'];
$password = $data['password'];
$cpassword = $data['cpassword'];

if ($password) {
    if ($cpassword == $password) {
        $checkQuery = "SELECT email FROM `users` WHERE email = '$email' AND id != '$id'";
        $checkEmail = $con->query($checkQuery);

        if ($checkEmail->num_rows) {
            $_SESSION['error'] = "email already exits";
            header("location: user-edit.php");
        } else {
            if ($name && $email && $password) {
                $password = md5($password);
                $updQuery = "UPDATE `users` SET name='$name', email='$email', password='$password' WHERE id=$id";
            
                $con->query($updQuery);
            
                $_SESSION['success'] = "User Detail update successfully..";
            
                header("location: user-list.php");
            } else {
                header("location: user-list.php");
            }
        }
    }
} else {
    $checkQuery = "SELECT email FROM `users` WHERE email = '$email' AND id != '$id'";
    $checkEmail = $con->query($checkQuery);
    if ($checkEmail->num_rows) {
        $_SESSION['error'] = "email already exits";
            header("location: user-edit.php");
    } else {
        if ($name && $email) {
            $updQuery = "UPDATE `users` SET name='$name', email='$email' WHERE id=$id";
            $con->query($updQuery);
    
            $_SESSION['success'] = "User Detail update successfully..";
                
                header("location: user-list.php");
            } else {
                header("location: user-list.php");
            }
    }

}





?>