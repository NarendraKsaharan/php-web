<?php
include_once('config-user.php');

$id = $_GET['bid'];

if ($id) {
    $delQuery = "DELETE FROM `blocks` WHERE id=$id";
    $con->query($delQuery);

    $_SESSION['success'] = "Data Delete Successfully...";
    header("location: block-list.php");

} else {
    $_SESSION['error'] = "Somthing Went Wrong...";
    header("location: block-list.php");
}



?>