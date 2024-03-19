<?php
include_once('config-user.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);
$countryId = $data['country_id'];
$name = $data['name'];
$status = $data['status'];

if ($countryId && $name && $status) {
    
    $inQuery = "INSERT INTO `states`(`country_id`, `name`, `status`) VALUES ('$countryId', '$name', '$status')";
    $con->query($inQuery);

    $_SESSION['success'] = "State Added successfully";
    header("location: state-list.php");
} else {
    header("location: add-state.php");
    $_SESSION['error'] = "Somthing Went Wrong";
}



?>