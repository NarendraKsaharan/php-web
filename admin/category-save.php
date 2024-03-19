<?php
include_once('config-user.php');

$data = $_POST;

$parentId = $data['parent_id'];
$name = $data['name'];
$status = $data['status'];
$description = $data['editor'];

if ($name && $status && $description) {
    
    $inQuery = "INSERT INTO `categories`(`parent_id`, `name`, `status`, `description`) VALUES ('$parentId', '$name', '$status', '$description')";
    $con->query($inQuery);

    $_SESSION['success'] = "Category Added Successfully...";
    header("location: category-list.php");

} else {
    $_SESSION['error'] = "Somthing Went Wrong..";
    header("location: add-category.php");
}





?>