<?php
include_once('config-user.php');
include_once('auth.php');

$id = $_GET['sid']??0;

if ($id) {
    $selStateQuery = "SELECT * FROM `states` WHERE id=$id";
    $selState = $con->query($selStateQuery);
    $state = $selState->fetch_assoc();

    $selCityQuery = "SELECT * FROM `cities` WHERE state_id=$id";
    $selCity = $con->query($selCityQuery);
}


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
                        <span class="dashboard">Update detail  & Submit</span>
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
                <form action="state-update.php" method="post" class="register">
                        <div class="table">
                            <table border="2" style="border-collapse: collapse;">
                                <tr>
                                    <th colspan="2">update State</th>
                                </tr>
                                <tr>
                                    <th>Country Id</th>
                                    <td>    
                                <?php
                                $selCountQuery = "SELECT * FROM `countries` WHERE `status`=1";
                                $selCountry = $con->query($selCountQuery);
                                ?>
                                        <select name="country_id" id="">
                                            <option value="<?= $count['name'] ?>">Select Country</option>
                                <?php
                                    while ($count = $selCountry->fetch_assoc()) {
                                    ?>
                                        <option value="<?= $count['id'] ?>"<?= ($count['id'] == $state['country_id'])?'selected':'' ?>><?= $count['name'] ?></option>
                                <?php
                                        }
                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>State Name</th>
                                    <td>
                                        <input type="hidden" name="id" value="<?= $state['id'] ?>">
                                        <input type="text" name="name" id="name" value="<?= $state['name'] ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <th>State Status</th>
                                    <td>
                                        <select name="status" id="c_status">
                                            <option value="1" <?= ($state['status'] == 1)?'selected':'' ?> >Enable</option>
                                            <option value="2" <?= ($state['status'] == 2)?'selected':'' ?>>Disable</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Add City</th>
                                    <th>
                                        <table border="1" style="border-collapse: collapse;" id="nes-tab">
                                            <tr>
                                                <th>City Name</th>
                                                <th>Status</th>
                                                <th><input type="button" value="Add" class="add-row button" ></th>
                                            </tr>
                                            <?php
                                                while ($city = $selCity->fetch_assoc()) {
                                                
                                                
                                            ?>
                                            <tr>
                                                <th>
                                                    <input type="hidden" name="city_id[]" value="<?= $city['id'] ?>">
                                                    <input type="text" name="city_name[]" value="<?= $city['name'] ?>"></th>
                                                <td>
                                                    <select name="city_status[]" id="s_status">
                                                        <option value="1" <?= ($city['status'] == 1)?'selected':'' ?>>Enable</option>
                                                        <option value="2" <?= ($city['status'] == 2)?'selected':'' ?>>Disable</option>
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
                                    <th colspan="2"><input type="submit" value="Submit" id="button"></th>
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
        row = '<tr><th><input type="text" name="city_name[]"></th><td><select name="city_status[]" id="s_status"><option value="1">Enable</option><option value="2">Disable</option> </select></td><td><input type="button" value="X" class="remove"></td></tr>';
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