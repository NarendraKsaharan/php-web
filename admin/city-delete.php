<?php
include_once('config-user.php');

$id = $_GET['cid'];

// echo $_GET['cid];

if ($id) {
    $delQuery = "DELETE FROM `cities` WHERE id=$id";
    $con->query($delQuery);

    $_SESSION['success'] = "City delete Successfully";

    header("location: city-list.php");
} else {
    header("location: city-list.php");
}




?>