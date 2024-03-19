<?php
include_once('config-user.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);

$name = $data['name'];
$status = $data['status'];

if ($name && $status) {
    
    $inQuery = "INSERT INTO `countries`(`name`, `status`) VALUES ('$name', '$status')";
    $con->query($inQuery);

    $_SESSION['success'] = "Country Added successfully";
    header("location: country-list.php");
} else {
    header("location: add-country.php");
    $_SESSION['error'] = "Somthing Went Wrong";
}



?>