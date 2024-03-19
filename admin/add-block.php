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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js"></script>


</head>

<body>
<?php include_once("includes/nav.php"); ?>
    <section class="home-section">
    <?php include_once("includes/header.php"); ?>

        <div class="home-content">
            <div class="main-top">
                <div class="top">
                    <div class="sidebar-button">
                        <span class="dashboard">Fill Block & Submit Form</span>
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
                    <form action="block-save.php" method="post" class="register">
                        <div class="table">
                            <table border="2" style="border-collapse: collapse;">
                                <tr>
                                    <th colspan="2">Add Blocks</th>
                                </tr>
                                
                                <tr>
                                    <th>Block Name</th>
                                    <td><input type="text" name="name" id="name" required></td>
                                </tr>
                                <tr>
                                    <th>Block Status</th>
                                    <td>
                                        <input type="radio" name="status" value="1">
                                        <span>&nbsp;Enable&nbsp;&nbsp;</span>
                                        <input type="radio" name="status" value="2">
                                        <span>&nbsp;Disable</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <th>
                                        <textarea name="editor" id="editor" rows="1" cols="1"></textarea>
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
    CKEDITOR.replace('editor');
</script>
</body>

</html>