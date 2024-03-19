<?php
include_once('config-user.php');

$id = $_GET['ctid'];

if ($id) {
    $delQuery = "DELETE FROM `categories` WHERE id=$id";
    $con->query($delQuery);

    $_SESSION['success'] = "Data Delete Successfully...";
    header("location: category-list.php");

} else {
    $_SESSION['error'] = "Somthing Went Wrong...";
    header("location: category-list.php");
}



?>