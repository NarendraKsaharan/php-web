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
                        <span class="dashboard">Welcome to Cities</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <div class="aas">
                        <a href="add-city.php">+ Add New City</a> 
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
$selQuery = "SELECT ct.*,st.name as state_name,cnt.name as country_name FROM `cities` as ct INNER JOIN `states` as st ON ct.state_id=st.id INNER JOIN `countries` as cnt ON ct.country_id=cnt.id;";
$selCity = $con->query($selQuery);
include_once('message-user.php');

if ($selCity->num_rows) {
    ?>
    <table>
        <tr>
            <th>Sr No.</th>
            <th>Country</th>
            <th>State</th>
            <th>City Name</th>
            <th>city Status</th>
            <th>Action</th>
        </tr>
    <?php
    
    $i = 1;
    while ($city = $selCity->fetch_assoc()) {
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <td><?= $city['country_name'] ?></td>
            <td><?= $city['state_name'] ?></td>
            <td><?= $city['name'] ?></td>
            <td><?= ($city['status'] == 1)?'enable':'disable' ?></td>
            <td>
                <a href="city-edit.php?cid=<?= $city['id'] ?>" class="green">Edit</a>
                <a href="city-delete.php?cid=<?= $city['id'] ?>" class="red">Delete</a>
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
</body>
</html>