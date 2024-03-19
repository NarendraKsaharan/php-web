<?php
include_once('config-user.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);
// die;

$countName = $data['name'];
$countStatus = $data['status'];
$stateName = $data['state_name'];
$stateStatus = $data['state_status'];

echo "<pre>"; 
// print_r($stateStatus);
// die;


if ($countName && $countStatus) {
    $inCountQuery = "INSERT INTO `countries` (`name`, `status`) VALUES ('$countName', '$countStatus')";
    $con->query($inCountQuery);
    $country_id = $con->insert_id;

   // $count = count($stateName);

    for ($i=0; $i < count($stateName); $i++) { 
    $stateNames = $stateName[$i];
    $stateStatuses = $stateStatus[$i];

        if ($stateNames && $stateStatuses) {
            $inStateQuery  = "INSERT INTO `states` (`country_id`, `name`, `status`) VALUES ('$country_id', '$stateNames', '$stateStatuses')";
            echo $inStateQuery;
            $con->query($inStateQuery);
        }
    }
        $_SESSION['success'] = "country Added successfully.....";
        header("location: country-list.php");
} else {
    $_SESSION['error'] = "Somthing Went Wrong...";
    header("location: add-country.php");
}




?>