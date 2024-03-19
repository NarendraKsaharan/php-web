<?php
include_once('config-user.php');

$id = $_GET['cid'];

// echo $_GET['cid];

if ($id) {
    $delCountQuery = "DELETE FROM `countries` WHERE id = $id";
    $delStateQuery = "DELETE FROM `states` WHERE country_id = $id";
    $delCityQuery = "DELETE FROM `cities` WHERE country_id = $id";

    $con->query($delCountQuery);
    $con->query($delStateQuery);
    $con->query($delCityQuery);

    $_SESSION['success'] = "Country delete Successfully";

    header("location: country-list.php");
} else {
    header("location: country-list.php");
}




?>