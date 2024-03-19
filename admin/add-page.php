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
                        <span class="dashboard">Fill Page & Submit Form</span>
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
                    <form action="page-save.php" method="post" enctype="multipart/form-data" class="register">
                        <div class="table">
                            <table border="2" style="border-collapse: collapse;">
                                <tr>
                                    <th colspan="2">Add Page</th>
                                </tr>
                                
                                <tr>
                                    <th>Title</th>
                                    <td><input type="text" name="title" id="title" required></td>
                                </tr>
                                <tr>
                                    <th>Heading</th>
                                    <td><input type="text" name="heading" id="heading" required></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <select name="status" id="">
                                            <option value="0">Select Status</option>
                                            <option value="1">Enable</option>
                                            <option value="2">Disable</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <th>
                                        <textarea name="editor" id="editor" rows="1" cols="1"></textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Url Key</th>
                                    <td><input type="text" name="url_key" id="url_key"></td>
                                </tr>
                                <tr class="image">
                                    <th>Image</th>
                                    <td><input type="file" name="image" id="naimageme" required></td>
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