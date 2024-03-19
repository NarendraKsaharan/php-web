<?php
include_once('config-user.php');
include_once('auth.php');

$id = $_GET['uid'];

// echo $_GET['uid'];
// die;

if ($id) {
    
    $delQuery = "DELETE FROM `users` WHERE id=$id";

    // echo $delQuery;
    // die;
    $con->query($delQuery);

    $_SESSION['success'] = "User Delete Successfully..";
    header("location: user-list.php");

} else {
    header("location: user-list.php");
}
?>