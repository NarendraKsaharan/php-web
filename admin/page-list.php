<?php
include_once('config-user.php');
include_once('auth.php');


?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <?php include_once("includes/head.php"); ?>
</head>

<body>
<?php include_once("includes/nav.php"); ?>
    <section class="home-section">
    <?php include_once("includes/header.php"); ?>

        <div class="home-content">
            <div class="main-top">
                <div class="top">
                    <div class="sidebar-button">
                        <span class="dashboard">Welcome to Page</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <div class="aas">
                        <a href="add-page.php">+ Add New Page</a> 
                    </div>
                </div>
            </div>
           
            
        </div>
        
    </section>
    <section>
        <div class="table">
            <div class="full">
 
            <!-- category-list work -->
<?php
$selQuery = "SELECT * FROM `pages`";
$selPage = $con->query($selQuery);
include_once('message-user.php');

if ($selPage->num_rows) {
    ?>
    <table>
        <tr>
            <th>Sr No.</th>
            <th>Title</th>
            <th>Heading</th>
            <th>Status</th>
            <th>Url Key</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    <?php
    $i  = 1;
    while ($page = mysqli_fetch_assoc($selPage)) {
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <th><?= $page['title'] ?></th>
            <th><?= $page['heading'] ?></th>
            <th><?= ($page['status'] == 1)?'enable':'disable' ?></th>
            <th><?= $page['url_key'] ?></th>
            <th><?= $page['image'] ?></th>
            <th>
                <a href="page-edit.php?pid=<?= $page['id'] ?>" class="green">Edit</a>
                <a href="page-delete.php?pid=<?= $page['id'] ?>" class="red">Delete</a>
            </th>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php

} else {
    echo "No Data Found";
}

?>

<!-- country-list work end -->
            </div>
        </div>
    </section>
</body>
</html>