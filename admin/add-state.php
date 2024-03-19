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
                        <span class="dashboard">Fill State & Submit Form</span>
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
                <form action="save-state.php" method="post" class="register">
                        <div class="table">
                            <table border="2" style="border-collapse: collapse;">
                                <tr>
                                    <th colspan="2">Add State</th>
                                </tr>
                                <tr>
                                    <th>Country Id</th>
                                    <td>    
                                <?php
                                $selCountQuery = "SELECT * FROM `countries` WHERE status=1";
                                $selCountry = $con->query($selCountQuery);
                                ?>
                                        <select name="country_id" id="">
                                            <option value="">Select Country</option>
                                <?php
                                    while ($_country = $selCountry->fetch_assoc()) {
                                ?>
                                        <option value="<?= $_country['id'] ?>"><?= $_country['name'] ?></option>
                                <?php
                                    }
                                ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>State Name</th>
                                    <td><input type="text" name="name" id="name"></td>
                                </tr>
                                <tr>
                                    <th>State Status</th>
                                    <td>
                                        <select name="status" id="c_status">
                                            <option value="1">Enable</option>
                                            <option value="2">Disable</option>
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
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <th><input type="text" name="city_name[]"></th>
                                                <td>
                                                    <select name="city_status[]" id="s_status">
                                                        <option value="1">Enable</option>
                                                        <option value="2">Disable</option>
                                                    </select>
                                                </td>
                                                <td><input type="button" value="Add" class="add-row button" ></td>
                                            </tr>
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