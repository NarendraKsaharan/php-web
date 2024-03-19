<?php 
include_once('admin/config-user.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);
// die;

$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$message = $data['message'];

if ($name && $email && $phone && $message) {
    
    $inQuery = "INSERT INTO `enquries`(`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";
    $con->query($inQuery);

    $_SESSION['success'] = "Enquiry Genrated Successfully...";
    header("location: index.php");
} else {
    $_SESSION['error'] = "Enquiry Not Genrated...";
    header("location: add-enquiry.php");
}


?>