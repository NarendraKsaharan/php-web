<?php
include_once('config-user.php');
include_once('auth.php');

$data = $_POST;
// echo "<pre>";
// print_r($data);

$title       = $data['title']??0;
$heading     = $data['heading']??0;
$status      = $data['status']??0;
$description = $data['editor']??0;
$image       = $_FILES['image']??0;
$urlKey     = $data['urk_key']??0;

if (empty($urlKey) && !empty($title)) {
    $urlKey = str_replace(' ', '-', $title) . '-' . rand(100000, 999999);
} else {
    $urlKey = str_replace(' ', '-', $urlKey) . '-' . rand(100000, 999999); 
}

if ($title && $heading && $status && $image) {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileName = $_FILES['image']['name'];
        $tmpFilePath = $_FILES['image']['tmp_name'];
    
        $folder = "images/page/".$fileName;
        move_uploaded_file($tmpFilePath, $folder);
    }

    $insQuery = "INSERT INTO `pages` (`title`, `heading`, `status`, `description`, `url_key`, `image`) VALUES ('$title', '$heading', '$status', '$description', '$urlKey', '$folder')";

    $con->query($insQuery);

    $_SESSION['success'] = "Page Added Successfully...";
    header("location: page-list.php");
} else {
    $_SESSION['error'] = "Somthing Went Wrong..";
    header("location: add-page.php");
}

?>