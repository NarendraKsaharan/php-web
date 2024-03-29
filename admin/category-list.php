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
                        <span class="dashboard">Welcome to categories</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <div class="aas">
                        <a href="add-category.php">+ Add New Category</a> 
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
$selQuery = "SELECT ct.*,c.name as parent_name FROM `categories` as ct LEFT JOIN `categories` as c ON ct.parent_id=c.id";
// $selQuery = "select * from categories";
$selCate = $con->query($selQuery);
include_once('message-user.php');

if ($selCate->num_rows) {
    ?>
    <table>
        <tr>
            <th>Sr No.</th>
            <th>Parent</th>
            <th>Name</th>
            <th>Status</th>
            <!-- <th>Description</th> -->
            <th>Action</th>
        </tr>
    <?php
    $i  = 1;
    while ($cate = $selCate->fetch_assoc()) {
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <th><?= $cate['parent_name']??0 ?></th>
            <th><?= $cate['name'] ?></th>
            <th><?= ($cate['status'] == 1)?'enable':'disable' ?></th>
            <!-- <th><?= $cate['description'] ?></th> -->
            <th>
                <a href="category-edit.php?ctid=<?= $cate['id'] ?>" class="green">Edit</a>
                <a href="category-delete.php?ctid=<?= $cate['id'] ?>" class="red">Delete</a>
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