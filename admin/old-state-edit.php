<?php
include_once('config-user.php');
include_once('auth.php');

$id = $_GET['sid']??0;

// echo $_GET['cid'];
if ($id) {
    $selQuery = "SELECT * FROM `states` WHERE id=$id";
    $selState = $con->query($selQuery);

    $state = $selState->fetch_assoc();
} 


?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <?php include_once("includes/head.php"); ?>

    <style>
        body {
            font-family: sans-serif;
            /*background: -webkit-linear-gradient(to right, #155799, #159957);
            background: linear-gradient(to right, #155799, #159957);
            color: whitesmoke;*/
        }
        span{
            font-size: 18px;
        }

        h1 {
            text-align: center;
            margin: 4px;
            font-size: 32px;
            color: aquamarine;
            /* padding-bottom: 24px; */
        }
        .form{
            width: 100%;
            float: left;
            background: -webkit-linear-gradient(to right, #155799, #159957);
            background: linear-gradient(to right, #155799, #159957);
            height: 100vh;
            margin-left: -3%;
            margin-top: 5%;
        }

        form {
            width: 30rem;
            margin: auto;
            color: whitesmoke;
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(11, 15, 13, 0.582);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
            padding: 12px 16px;
            margin-top: 1%;
        }

        input[type=text], [type=number]{
            width: 100%;
            margin: 5px 0;
            border-radius: 5px;
            padding: 15px 18px;
            box-sizing: border-box;
        }
        input::placeholder{
            font-size: 20px;
        }
        label {
            font-size: 24px;
            color: aqua;
        }

        #button {
        /*  background-color: #030804;*/
            background: lightgray;
            color: black;
            font-weight: bold;
            padding: 14px 20px;
            border-radius: 10px;
            margin: 4px 0;
            width: 48%;
            font-size: 18px;
            display: inline-block;
        }

        #button:hover {
            opacity: 0.6;
            cursor: pointer;
        }

        .headingsContainer {
            text-align: center;
        }

        .mainContainer {
            padding: 16px;
        }

        /* Media queries for the responsiveness of the page */
        @media screen and (max-width: 600px) {
            form {
                width: 25rem;
            }
        }

        @media screen and (max-width: 400px) {
            form {
                width: 20rem;
            }
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
                        <span class="dashboard">Update State Details</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                    <!-- <div class="aas">
                        <a href="">+ Add New Users</a> 
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="table">
            <div class="full">
            <div class="form">
                    <form action="state-update.php" method="post">
                    <!-- Headings for the form -->
                    <div class="headingsContainer">
                        <h1>Add States</h1>
                    </div>
<?php include_once('message-user.php'); ?>
                    <!-- Main container for all inputs -->
                    <div class="mainContainer">
                        <!-- Username -->
                        <input type="hidden" name="id" value="<?= $state['id'] ?>">
                        <label>Country Id:</label>
                        <input type="number" name="country_id" value="<?= $state['country_id'] ?>" />

                        <br><br>
                        <label for="name">State Name</label>
                        <input type="text" name="name" placeholder="State Name" value="<?= $state['name'] ?>">

                        <br><br>
                        <label for="status">Status:&nbsp;&nbsp;&nbsp;</label>
                        <input type="radio" name="status" value="1" <?=($state['status'] == '1')?'checked':'' ?> />
                        <span>&nbsp;Enable&nbsp;&nbsp;</span>
                        <input type="radio" name="status" value="2" <?=($state['status'] == '2')?'checked':'' ?>>
                        <span>&nbsp;Disable</span>

                        <br><br>
                        <input type="submit" name="submit" value="Submit" id="button">
                        <input type="reset" name="reset" value="Reset" id="button">

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>