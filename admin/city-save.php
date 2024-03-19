<?php
include_once('config-user.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);

$countryId = $data['country_id'];
$stateId = $data['state_id'];
$name = $data['name'];
$status = $data['status'];

if ($name && $status) {
    
    $inQuery = "INSERT INTO `cities`(`country_id`, `state_id`, `name`, `status`) VALUES ('$countryId', '$stateId','$name', '$status')";
    $con->query($inQuery);

    $_SESSION['success'] = "City Added successfully";
    header("location: city-list.php");
} else {
    header("location: add-city.php");
    $_SESSION['error'] = "Somthing Went Wrong";
}



?>