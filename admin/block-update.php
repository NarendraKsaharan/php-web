<?php
include_once('config-user.php');

$data = $_POST;

$id =$data['id'];

$name = $data['name'];
$status = $data['status'];
$description = $data['editor'];

if ($id && $name && $status) {
    
    $updQuery = "UPDATE `blocks` SET name='$name', status='$status', description='$description' WHERE id=$id";
    $con->query($updQuery);

    $_SESSION['success'] = "Blocks Update Successfully";
    header("location: block-list.php");
} else {
    $_SESSION['error'] = "Blocks Not Updated";
    header("location: block-edit.php");
}



?>