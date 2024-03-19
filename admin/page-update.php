<?php
include_once('config-user.php');
include_once('auth.php');

$data = $_POST;

// echo "<pre>";
// print_r($data);

$id          = $data['id']??0;
$title       = $data['title']??0;
$heading     = $data['heading']??0;
$status      = $data['status']??0;
$description = $data['editor']??0;
$image       = $_FILES['image']??0;

if ($title && $heading && $status && $description && $image ) {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileName = $_FILES['image']['name'];
        $tmpFilePath = $_FILES['image']['tmp_name'];

        if (!empty($page['image'])) {
            unlink($page['image']);
        }
    
        $folder = "images/page/".$fileName;
        move_uploaded_file($tmpFilePath, $folder);

        // $page['image'] = $folder;
    }

    $updQuery = "UPDATE `pages` SET `title` = '$title', `heading` = '$heading', `status` = '$status', `description` = '$description', `image`= '$folder' WHERE id = $id";
    $pageData = $con->query($updQuery);

    $_SESSION['success'] = "Page Updated Successfully....";
    header("location: page-list.php");
  
} else {
     $_SESSION['error'] = "Somthing Went Wrong....";
     header("location: page-edit.php");
}

?>