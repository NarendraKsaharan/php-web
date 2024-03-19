<?php
include_once('config-user.php');

$data = $_POST;

echo "<pre>";
// print_r($data);
// die;

$state_id = $data['id'];

$countryId = $data['country_id'];
$stateId = $data['id'];
$name = $data['name'];
$status = $data['status'];

$cityIds = $data['city_id']??[0];
$cityName = $data['city_name']??[];
$cityStatus = $data['city_status']??[];

echo "<pre>";
// print_r($data);
// die;
if ($countryId && $name && $status) {
    
    $updQuery = "UPDATE `states` SET country_id='$countryId', name='$name', status='$status' WHERE id=$state_id";
    //  echo $updQuery;
    //  die;
    $con->query($updQuery);

    $impcityIds = implode(",", $cityIds);
    $delCityQuery = "DELETE FROM `cities` WHERE id NOT IN($impcityIds) AND state_id=$stateId";
    $con->query($delCityQuery);

    foreach ($cityName as $key => $ctName) {
        $cityId = $cityIds[$key]??0;
        $ctStatus = $cityStatus[$key];

        if ($cityId) {
            $updCityQuery = "UPDATE `cities` SET country_id = '$countryId', name = '$ctName', status = '$ctStatus' WHERE id = $cityId";
            $con->query($updCityQuery);

            //echo $updCityQuery;
            
        } else {
            $inCityQuery = "INSERT INTO `cities`(`country_id`, `state_id`, `name`, `status`) VALUES ($countryId, $stateId, '$ctName', '$ctStatus')";
            $con->query($inCityQuery);
            // echo $inCityQuery;
        }
    }



    $_SESSION['success'] = "State Detail Updated Successfully";
    header("location: state-list.php");
} else {
    header("location: state-edit.php?sid=".$id);
    $_SESSION['error'] = "State Detail Can't Updated";
}




?>