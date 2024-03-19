<?php
include_once('config-user.php');

$data = $_POST;
echo "<pre>";
// print_r($data);
// die;

$countId = $data['country_id'];
$stateName = $data['name'];
$stateStatus = $data['status'];
$cityName = $data['city_name'];
$cityStatus = $data['city_status'];
// print_r($cityStatus);
// die;

if ($stateName && $stateStatus) {
        $inStateQuery = "INSERT INTO `states`(`country_id`, `name`, `status`) VALUES ('$countId', '$stateName', '$stateStatus')";
        // echo $inStateQuery;
        // die;
        $con->query($inStateQuery);
        $state_id = $con->insert_id;

        for ($i=0; $i < count($cityName); $i++) { 
            $cityNames = $cityName[$i];
            $cityStatuses = $cityStatus[$i];

            // echo $cityNames;
            // die;

            if ($cityNames && $cityStatuses) {
                $inCityQuery = "INSERT INTO `cities`(`country_id`, `state_id`, `name`, `status`) VALUES ('$countId', '$state_id', '$cityNames', '$cityStatuses')";
                // echo $inCityQuery;
                //  die;
                $con->query($inCityQuery);
            }
        }
        $_SESSION['success'] = "state Added successfully.....";
        header("location: state-list.php");
} else {
    $_SESSION['error'] = "Somthing Went Wrong...";
    header("location: add-state.php");
}



?>