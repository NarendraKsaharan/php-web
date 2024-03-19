<?php
include_once('config-user.php');
include_once('auth.php');

$id = $_GET['cid']??0;


// echo $_GET['cid'];
if ($id) {
    $selCountQuery = "SELECT * FROM `countries` WHERE id=$id";
    $selCount = $con->query($selCountQuery);
    // echo "<pre>";
    
    $count = $selCount->fetch_assoc();
    // print_r($count);
    // die;
    

    $selStateQuery = "SELECT * FROM `states` WHERE country_id=$id";
    $selState = $con->query($selStateQuery);


}


?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <?php include_once("includes/head.php"); ?>

    <!-- <style>
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
</style>     -->
</head>

<body>
<?php include_once("includes/nav.php"); ?>
    <section class="home-section">
    <?php include_once("includes/header.php"); ?>

        <div class="home-content">
            <div class="main-top">
                <div class="top">
                    <div class="sidebar-button">
                        <span class="dashboard">Update Country Details</span>
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
                    <form action="country-update.php" method="post" class="register">
                        <div class="table">
                            <table border="2" style="border-collapse: collapse;">
                                <tr>
                                    <th colspan="2">Add Country</th>
                                </tr>
                                <tr><input type="hidden" name="id" value="<?= $count['id'] ?>"></tr>
                                <tr>
                                    <th>Country Name</th>
//<?php
//if(isset($count) && $count !== null)
 //{
//?>
                                    <td><input type="text" name="name" id="name" value="<?= $count['name'] ?>"></td>
                                </tr>
                                <tr>
                                    <th>Country Status</th>
                                    <td>
                                        <select name="status" id="c_status">
                                            <option value="1"<?= ($count['status'] == 1)?'selected':'' ?> >Enable</option>
                                            <?php
 //}
 ?>
                                            <option value="2"<?= ($count['status'] == 2)?'selected':'' ?> >Disable</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Add State</th>
                                    <th>
                                        <table border="1" style="border-collapse: collapse;" id="nes-tab">
                                            <tr>
                                                <th>State Name</th>
                                                <th>Status</th>
                                                <th><input type="button" value="Add" class="add-row button" ></th>
                                            </tr>
                                            <?php
                                            while ($state = $selState->fetch_assoc()) {
                                                
                                            
                                            ?>
                                            <tr>
                                                <th><input type="hidden" name="state_id[]" value="<?= $state['id'] ?>">
                                                    <input type="text" name="state_name[]" value="<?= $state['name'] ?>"></th>
                                                <td>
                                                    <select name="state_status[]" id="s_status">
                                                        <option value="1"<?= ($state['status'] == 2)?'selected':'' ?> >Enable</option>
                                                        <option value="2"<?= ($state['status'] == 2)?'selected':'' ?> >Disable</option>
                                                    </select>
                                                </td>
                                                <td><input type="button" value="X" class="remove"></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="2"><input type="Submit" value="Submit" id="button"></th>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
    $(document).ready(function(){
        $('#nes-tab .add-row').click(function(){
            row = '<tr><th><input type="text" name="state_name[]"></th><td><select name="state_status[]" id="s_status"><option value="1">Enable</option><option value="2">Disable</option> </select></td><td><input type="button" value="X" class="remove"></td></tr>';
            $('#nes-tab').append(row);
        });
        $('#nes-tab').delegate('.remove', 'click', function(){
            (this).closest('tr').remove();
        });

    });

    $(document).ready(function(){

        $('.register').validate();

    });

    
    
</script>
</body>
</html>