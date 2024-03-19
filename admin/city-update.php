<?php
include_once('config-user.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);

$id = $data['id'];

$countryId = $data['country_id'];
$stateId = $data['state_id'];
$name = $data['name'];
$status = $data['status'];

if ($name && $status) {
    
    $updQuery = "UPDATE `cities` SET country_id='$countryId', state_id='$stateId', name='$name', status='$status' WHERE id=$id";
    // echo $updQuery;
    $con->query($updQuery);

    $_SESSION['success'] = "City Detail Update Successfully";
    header("location: city-list.php");
} else {
    header("location: city-edit.php?cid=".$id);
    $_SESSION['error'] = "City Detail Can't Updated";

}




?>