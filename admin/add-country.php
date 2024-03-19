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
                        <span class="dashboard">Fill Country & Submit Form</span>
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
                    <form action="save-country.php" method="post" class="register">
                        <div class="table">
                            <table border="2" style="border-collapse: collapse;">
                                <tr>
                                    <th colspan="2">Add Country</th>
                                </tr>
                                <tr>
                                    <th>Country Name</th>
                                    <td><input type="text" name="name" id="name" required></td>
                                </tr>
                                <tr>
                                    <th>Country Status</th>
                                    <td>
                                        <select name="status" id="c_status">
                                            <option value="1">Enable</option>
                                            <option value="2">Disable</option>
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
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <th><input type="text" name="state_name[]" required></th>
                                                <td>
                                                    <select name="state_status[]" id="s_status">
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
                                    <th colspan="2"><input type="Submit" value="Submit" id="button" onclick="return formVal();"></th>
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

function formVal() {
  a = true;
  $('input[name="state_name[]"]').each(function() {
    if ($(this).val() === '') {
      a = false;
      return false;
    }
  });
  if (!a) {
    alert("Please fill all state names");
    return false;
  }
  return true;
}
   
</script>
</body>

</html>