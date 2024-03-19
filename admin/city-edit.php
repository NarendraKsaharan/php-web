<?php
include_once('config-user.php');
include_once('auth.php');

$id = $_GET['cid']??0;

// echo $_GET['cid'];
if ($id) {
    $selQuery = "SELECT * FROM `cities` WHERE id=$id";
    $selCity = $con->query($selQuery);

    $city = $selCity->fetch_assoc();
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
            font-size: 16px;
        }

        h1 {
            text-align: center;
            margin: 0px;
            font-size: 32px;
            color: skyblue;
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
            padding: 8px 12px;
            padding-bottom: 2px;
            margin-top: 1%;
        }

        input[type=text], [type=number]{
            width: 100%;
            margin: 10px 0;
            border-radius: 5px;
            padding: 8px 12px;
            box-sizing: border-box;
        }
        input::placeholder{
            font-size: 16px;
        }
        label {
            font-size: 18px;
            color: antiquewhite;
        }

        #button {
                /*  background-color: #030804;*/
            background: lightgray;
            color: black;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 10px;
            margin: 5px;
            width: 47%;
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
                        <span class="dashboard">Update City Details</span>
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
                    <form action="city-update.php" method="post" class="position" id="formid">
                        <!-- Headings for the form -->
                        <div class="headingsContainer">
                            <h1>Add City</h1>
                        </div>
                        <?php include_once('message-user.php'); ?>
                        <!-- Main container for all inputs -->
                        <div class="mainContainer">
                            <!-- Username -->
                            <input type="hidden" name="id" value="<?= $city['id'] ?>" />
                            
                            <label>Country Id:</label>
                            <?php                            
                            $selCountQuery = "SELECT * FROM `countries`";
                            $selCount = $con->query($selCountQuery);
                            ?>
                            <select name="country_id" id="country_id">
                                
                                <option value="<?= $count['name'] ?>">Select Country</option>
                            <?php
                                while ($count = $selCount->fetch_assoc()) {
                                    ?>
                                    <option value="<?= $count['id'] ?>"<?= ($count['id'] == $city['country_id'])?'selected':'' ?>><?= $count['name'] ?></option>
                            <?php
                                }
                            ?>
                            </select>                             
                            <br><br>
                            <label>state Id:</label>
                            <?php
                                $selStateQuery = "SELECT * FROM `states` WHERE country_id=" . $city['country_id'];
                                $selState = $con->query($selStateQuery);
                            ?>
                            <select name="state_id" id="state_id">
                                <!-- <option value="">Select State</option> -->
                            <?php
                                while ($state = $selState->fetch_assoc()) {
                                    ?>
                                    <option value="<?= $state['id'] ?>"<?= ($state['id'] == $city['state_id'])?'selected':'' ?>><?= $state['name'] ?></option>
                            <?php
                                }   
                            ?>                                 
                            </select>
                            <br><br>
                            <label for="name">City Name</label>
                            <input type="text" name="name" placeholder="Country Name" value="<?= $city['name'] ?>">

                            <br><br>
                            <label for="status">Status:&nbsp;&nbsp;&nbsp;</label>
                            <input type="radio" name="status" value="1" <?= ($city['status'] == '1')?'checked':'' ?> />
                            <span>&nbsp;Enable&nbsp;&nbsp;</span>
                            <input type="radio" name="status" value="2" <?= ($city['status'] == '2')?'checked':'' ?> />
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

<script>
    $(document).ready(function(){
        $('#country_id').change(function(){
            countryId = $(this).val();

            $.ajax({
                url: 'get-state.php',
                method: 'GET',
                data: {'country_id':countryId},
                success: function(response){
                    $('#state_id').html(response)
                },
                error: function(res){
                    alert("Somthing Went wrong with your js code");
                }
            });
        });
    });
</script> 
    
</body>
</html>