<?php
include_once('config-user.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);

$countryId = $data['id'];
$name = $data['name'];
$status = $data['status'];

$stateIds = $data['state_id']??[0];
$stateName = $data['state_name']??[];
$stateStatus = $data['state_status']??[];

if ($name && $status) {
    
    $updQuery = "UPDATE `countries` SET name='$name', status='$status' WHERE id=$countryId";
    // echo $updQuery;
    $con->query($updQuery);

    $impStateIds = implode(",", $stateIds);
    $delQuery = "DELETE FROM `states` WHERE id NOT IN($impStateIds) AND country_id=$countryId";
    $con->query($delQuery);

    foreach ($stateName as $key => $sName) {
        
        $stateId = $stateIds[$key]??0;
        $stStatus = $stateStatus[$key];

        if ($stateId) {
            $updQuery = "UPDATE `states` SET name='$sName', status='$stStatus' WHERE id=$stateId";
            $con->query($updQuery);
        } else {
            $inQuery = "INSERT INTO `states` (`country_id`, `name`, `status`) VALUES ($countryId, '$sName', '$stStatus')";
            $con->query($inQuery);
        }
    }

    $_SESSION['success'] = "Country Detail Update Successfully";
    header("location: country-list.php");
} else {
    header("location: country-edit.php?cid=".$id);
    $_SESSION['success'] = "Country Detail Can't Updated";

}




?>