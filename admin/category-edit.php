<?php
include_once('config-user.php');
include_once('auth.php');

$id = $_GET['ctid']??0;

if ($id) {
    $selCateQuery = "SELECT * FROM `categories` WHERE id=$id";
    $selCate = $con->query($selCateQuery);

    $cate = $selCate->fetch_assoc();
   
}

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
                        <span class="dashboard">Fill Category & Submit Form</span>
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
                    <form action="category-update.php" method="post" class="register">
                        <div class="table">
                            <table border="2" style="border-collapse: collapse;">
                                <tr>
                                    <th colspan="2">Add Category</th>
                                </tr>
                                <tr>
                                    <input type="hidden" name="id" value="<?= $cate['id'] ?>">
                                </tr>
                                <tr>
                                    <th>Parient Id</th>
                                    <td>
                                    
                                        <!-- <select name="parent_id" id="">
                                            <option value="1" <?= ($cate['parent_id']==1)?'selected':'' ?>>Sel Category</option> -->
                            <?php
                                $selCatesQuery = "SELECT * FROM `categories`";
                                $selCates = $con->query($selCatesQuery);
                            ?>
                            <select name="parent_id" id="Parent_id">
                                <option value="">Select State</option>
                            <?php
                                while ($cates = $selCates->fetch_assoc()) {
                                    ?>
                                    <option value="<?= $cates['id'] ?>"<?= ($cates['id'] == $cate['parent_id'])?'selected':'' ?>><?= $cates['name'] ?></option>
                            <?php
                                }   
                            ?>                                 
                            </select>

                                    </td>
                                </tr>
                                <tr>
                                    <th>Category Name</th>
                                    <td><input type="text" name="name" id="name" value="<?= $cate['name'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th>Category Status</th>
                                    <td>
                                        <input type="radio" name="status" value="1" <?= ($cate['status'] == 1)?'checked':'' ?>>
                                        <span>&nbsp;Enable&nbsp;&nbsp;</span>
                                        <input type="radio" name="status" value="2" <?= ($cate['status'] == 2)?'checked':'' ?>>
                                        <span>&nbsp;Disable</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <th>
                                        <textarea name="editor" id="editor" rows="1" cols="1"><?= $cate['description'] ?></textarea>
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
    CKEDITOR.replace('editor');
</script>
</body>

</html>