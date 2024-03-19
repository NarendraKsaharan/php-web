<?php
include_once('config-user.php');

$id = $_GET['sid'];

// echo $_GET['cid];

if ($id) {
    $delStateQuery = "DELETE FROM `states` WHERE id = $id";
    $delCityQuery = "DELETE FROM `cities` WHERE state_id= $id";

    $con->query($delStateQuery);
    $con->query($delCityQuery);

    $_SESSION['success'] = "State delete Successfully";

    header("location: state-list.php");
} else {
    header("location: state-list.php");
}




?>