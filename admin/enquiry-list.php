<?php
include_once('config-user.php');
include_once('auth.php');


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <?php include_once("includes/head.php"); ?>
    <style>
        .hone-section .top{
            height: 64px;
            margin-top: 0;
        }
    </style>
</head>

<body>
<?php include_once("includes/nav.php"); ?>
    <section class="home-section">
    <?php include_once("includes/header.php"); ?>

        <div class="home-content">
            <div class="main-top">
                <div class="top">
                    <div class="sidebar-button">
                        <span class="dashboard">User Enquiry List</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <!-- <div class="aas">
                        <a href="user-add.php">+ Add New Users</a> 
                    </div> -->
                </div>
            </div>
           
            
        </div>
        
    </section>
    <section>
        <div class="table">
            <div class="full">
            <?php
include_once('config-user.php');

$selQuery = "SELECT * FROM `enquries`";
$selEnq = $con->query($selQuery);



include_once('message-user.php');
if ($selEnq->num_rows) {
    ?>
    <table border="1" style="border-collapse:collapse;">
        <tr>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            
        </tr>
    <?php
    $i = 1;
    while ($enq = $selEnq->fetch_assoc()) {
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <td><?= $enq['name'] ?></td>
            <td><?= $enq['email'] ?></td>
            <td><?= $enq['phone'] ?></td>
            <td><?= $enq['message'] ?></td>
        </tr>
        <?php
        
    }
    ?>
    </table>


    <?php
}


?>
            </div>
        </div>
    </section>
</body>
</html>