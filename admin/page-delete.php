<?php
include_once('config-user.php');

$id = $_GET['pid']??0;

if ($id) {
    $delQuery = "DELETE FROM `pages` WHERE id= $id";
    $page = $con->query($delQuery);

    $_SESSION['success'] = "page deleted successfully....";
    header("location: page-list.php");
} else {
    $_SESSION['error'] = "Something Went Wrong....";
    header("location: page-list.php");
}

?>