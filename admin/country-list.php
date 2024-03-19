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
                        <span class="dashboard">Welcome to Countries</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <div class="aas">
                        <a href="add-country.php">+ Add New Country</a> 
                    </div>
                </div>
            </div>
           
            
        </div>
        
    </section>
    <section>
        <div class="table">
            <div class="full">
 
            <!-- country-list work -->
<?php
$selQuery = "SELECT * FROM `countries`";
$selCount = $con->query($selQuery);
include_once('message-user.php');

if ($selCount->num_rows) {
    ?>
    <table>
        <tr>
            <th>Sr No.</th>
            <th>Country Name</th>
            <th>Country Status</th>
            <th>Action</th>
        </tr>
    <?php
    
    $i = 1;
    while ($count = $selCount->fetch_assoc()) {
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <td><?= $count['name'] ?></td>
            <td><?= ($count['status'] == 1)?'enable':'disable' ?></td>
            <td>
                <a href="country-edit.php?cid=<?= $count['id'] ?>" class="green">Edit</a>
                <a href="country-delete.php?cid=<?= $count['id'] ?>" class="red">Delete</a>
            </td>
        </tr>
        <?php
        
    }
    ?>
    </table>
    <?php
    
} else {
    echo "No data Found";
}

?>

<!-- country-list work end -->
            </div>
        </div>
    </section>
    <!-- <footer>
            <div class = "footer">
                <h3>Showing 1 to 10 of 57 entries</h3>
                <h3>Previous  &nbsp <span>1</span> &nbsp 2  &nbsp 3 &nbsp 4 &nbsp 5  &nbsp Next</h3>
            </div>
    </footer> -->

    

</body>

</html>