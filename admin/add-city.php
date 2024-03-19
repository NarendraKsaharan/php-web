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
            color: skyblue;
            /* padding-bottom: 24px; */
        }
        .form{
            width: 137%;
            float: left;
            /* position:fixed; */
            background: -webkit-linear-gradient(to right, #155799, #159957);
            background: linear-gradient(to right, #155799, #159957);
            height: 100vh;
            /* margin-left: 2%; */
            margin-top: 5%;
        }

        form {
            width: 40rem;
            /* margin: auto; */
            color: whitesmoke;
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(11, 15, 13, 0.582);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
            padding: 8px 16px;
            padding-bottom: 2px;
            margin-top: 12%;
            margin-left: 32%;
        }

        input[type=text], [type=number]{
            width: 100%;
            margin-top: 7px;
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
    /*            background-color: #030804;*/
            background: lightgray;
            color: black;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 10px;
            margin-top: 5px;
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
    <!-- <link rel="stylesheet" href="css/form-css.css"> -->

</head>

<body>
<?php include_once("includes/nav.php"); ?>
    <section class="home-section">
    <?php include_once("includes/header.php"); ?>

        <div class="home-content">
            <div class="main-top">
                <div class="top">
                    <div class="sidebar-button">
                        <span class="dashboard">Fill City & Submit Form</span>
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
                    <form action="city-save.php" method="post" class="register set">
                    <!-- Headings for the form -->
                    <div class="headingsContainer">
                        <h1>Add City</h1>
                    </div>
                    <?php include_once('message-user.php'); ?>
                    <!-- Main container for all inputs -->
                    <div class="mainContainer">
                        <!-- Username -->
                        <label>Country:</label><br>
                        <?php
                        $selCountQuery = "SELECT * FROM `countries` WHERE status=1";
                        $selCountry = $con->query($selCountQuery);
                        ?>
                            <select name="country_id" id="country_id" required>
                                <option value="">Select Country</option>
                        <?php
                            while ($_country = $selCountry->fetch_assoc()) {
                                ?>
                                <option value="<?= $_country['id'] ?>"><?= $_country['name'] ?></option>
                                <?php
                            }
                        ?>                            
                            </select>
                        <br><br>

                        <label>State:</label>
                        <select name="state_id" id="state_id" required>
                            <option value="">Select State</option>
                        </select>

                        <br><br>
                        <label for="name">City Name</label><br>
                        <input type="text" name="name" placeholder="City Name" required>

                        <br><br>
                        <label for="status">Status:&nbsp;&nbsp;&nbsp;</label>
                        <input type="radio" name="status" value="1">
                        <span>&nbsp;Enable&nbsp;&nbsp;</span>
                        <input type="radio" name="status" value="2">
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
    <!-- <footer>
            <div class = "footer">
                <h3>Showing 1 to 10 of 57 entries</h3>
                <h3>Previous  &nbsp <span>1</span> &nbsp 2  &nbsp 3 &nbsp 4 &nbsp 5  &nbsp Next</h3>
            </div>
    </footer> -->
<script>
    $(document).ready(function(){
        //$('.register').validate();
        $('#country_id').change(function(){
            countryId = $(this).val();

            $.ajax({
                url: 'get-state.php',
                method: 'GET',
                data: {'country_id': countryId},
                success: function(res) {
                    $('#state_id').html(res);
                },
                error: function(re) {
                    alert("Something wrong with you js code...");
                    //$('#state_id').html('<option value="">Select State</option>');
                }
            });

        });

});
</script>
    

</body>

</html>