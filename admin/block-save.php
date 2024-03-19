<?php
include_once('config-user.php');

$data = $_POST;

$name = $data['name'];
$status = $data['status'];
$description = $data['editor'];

if ($name && $status && $description) {
    
    $inQuery = "INSERT INTO `blocks`(`name`, `status`, `description`) VALUES ('$name', '$status', '$description')";
    $con->query($inQuery);

    $_SESSION['success'] = "Block Added Successfully...";
    header("location: block-list.php");

} else {
    $_SESSION['error'] = "Somthing Went Wrong..";
    header("location: add-block.php");
}





?>