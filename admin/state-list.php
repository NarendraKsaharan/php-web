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
                        <span class="dashboard">Welcome to states</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <div class="aas">
                        <a href="add-state.php">+ Add New state</a> 
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
$selQuery = "SELECT st.*,cnt.name as country_name FROM `states` as st INNER JOIN `countries` as cnt ON st.country_id=cnt.id;";
$selState = $con->query($selQuery);
include_once('message-user.php');

if ($selState->num_rows) {
    ?>
    <table>
        <tr>
            <th>Sr No.</th>
            <th>Country</th>
            <th>State Name</th>
            <th>State Status</th>
            <th>Action</th>
        </tr>
    <?php
    
    $i = 1;
    while ($state = $selState->fetch_assoc()) {
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <td><?= $state['country_name'] ?></td>
            <td><?= $state['name'] ?></td>
            <td><?= ($state['status'] == 1)?'enable':'disable' ?></td>
            <td>
                <a href="state-edit.php?sid=<?= $state['id'] ?>" class="green">Edit</a>
                <a href="state-delete.php?sid=<?= $state['id'] ?>" class="red">Delete</a>
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