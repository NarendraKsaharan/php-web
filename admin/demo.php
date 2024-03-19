<?php
include_once('config-user.php');
include_once('auth.php');

$country_id = $_GET['cid'];

// fetch the country details
$selCountryQuery = "SELECT * FROM `countries` WHERE `id`=$country_id";
$selCountryCount = $con->query($selCountryQuery);

// fetch the associated states of the country
$selStatesQuery = "SELECT * FROM `states` WHERE `country_id`=$country_id";
$selStatesCount = $con->query($selStatesQuery);

// check if the country exists
if ($selStatesCount->num_rows) {
    $state = $selStatesCount->fetch_assoc();
} else {
    $_SESSION['error'] = "Country not found";
    header("location: country-list.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Edit Country - <?php echo $country['name']; ?> </title>
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
            font-size: 38px;
            color: darkgray;
            padding-bottom: 24px;
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

        input[type=text]{
            width: 100%;
            margin: 10px 0;
            border-radius: 5px;
            padding: 15px 18px;
            box-sizing: border-box;
        }
        input::placeholder{
            font-size: 20px;
        }
        label {
            font-size: 24px;
            color: lightsteelblue;
        }

        #button {
                /*  background-color: #030804;*/
            background: lightgray;
            color: black;
            font-weight: bold;
            padding: 14px 20px;
            border-radius: 10px;
            margin: 7px 0;
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
                        <span class="dashboard">Edit Country - <?php echo $country['name']; ?></span>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">

                        <form action="update-country.php" method="post">
                            <input type="hidden" name="country_id" value="<?php echo $country_id; ?>">

                            <div class="form-group">
                                <label for="name">Country Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $country['name']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="code">Country Code</label>
                                <input type="text" name="code" class="form-control" value="<?php echo $country['status']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="states">States</label>
                                <select name="states[]" class="form-control" multiple>
                                    <?php while($state = $selStatesCount->fetch_assoc()) { ?>
                                        <option value="<?php echo $state['id']; ?>" selected><?php echo $state['name']; ?></option>
                                    <?php } ?>

                                    <?php 
                                        // fetch all states except for the ones associated with this country
                                        $selAllStatesQuery = "SELECT * FROM `states` WHERE `country_id`!=$country_id";
                                        $selAllStatesCount = $con->query($selAllStatesQuery);

                                        while($state = $selAllStatesCount->fetch_assoc()) {
                                            echo '<option value="'.$state['id'].'">'.$state['name'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("includes/footer.php"); ?>
</body>
</html>
