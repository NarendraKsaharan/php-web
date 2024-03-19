<?php
include_once('config-user.php');

$data = $_POST;

$id =$data['id'];

$parentId = $data['parent_id'];
$name = $data['name'];
$status = $data['status'];
$description = $data['editor'];

if ($id && $name && $status) {
    
    $updQuery = "UPDATE `categories` SET parent_id=$parentId, name='$name', status='$status', description='$description' WHERE id=$id";
    $con->query($updQuery);

    $_SESSION['success'] = "Category Update Successfully";
    header("location: category-list.php");
} else {
    $_SESSION['error'] = "Category Not Updated";
    header("location: category-edit.php");
}



?>