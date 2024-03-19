<?php
include_once('config-user.php');
include_once('auth.php');

$id = $_GET['pid'];

if ($id) {
    $selQuery = "SELECT * FROM `pages` WHERE id = $id";
    $pageData = $con->query($selQuery);
    $page = $pageData->fetch_assoc();
    // echo "<pre>";
    // print_r($page);
    // die();
} else {
    $_SESSION["error"] = "Something Went Wrong....";
    header("location: page-list.php");
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
                        <span class="dashboard">Fill Page & Submit Form</span>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Filter">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section>
        <div class="table">
            <div class="full">
                <div class="form">
                    <form action="page-update.php" method="post" enctype="multipart/form-data" class="register">
                        <div class="table">
                            <table border="2" style="border-collapse: collapse;">
                                <tr>
                                    <th colspan="2">Update Page</th>
                                </tr>
                                
                                <tr>
                                    <th>Title</th>
                                    <td>
                                        <input type="hidden" name="id" value="<?= $page['id'] ?>">
                                        <input type="text" name="title" id="title" value="<?= $page['title'] ?>" required>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Heading</th>
                                    <td><input type="text" name="heading" id="heading" value="<?= $page['heading'] ?>" required></td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <select name="status" id="">
                                            <option value="0">Select Status</option>
                                            <option value="1" <?= (($page['status'] == 1)?'selected':'') ?> >Enable</option>
                                            <option value="2" <?= (($page['status'] == 2)?'selected':'') ?>>Disable</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Description</th>
                                    <th>
                                        <textarea name="editor" id="editor" rows="1" cols="1"><?= $page['description'] ?> </textarea>
                                    </th>
                                </tr>

                                <tr class="image">
                                    <th>Image</th>
                                    <td><input type="file" name="image" id="image" value="<?= $page['image'] ?>" required>
                                        <?php if ($page['image']): ?>
                                            <img src="<?= $page['image'] ?>" alt="Page Image" height="100">
                                        <?php else: ?>
                                            <p>No image available</p>
                                        <?php endif; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th colspan="2"><input type="Submit" value="Update" id="button" onclick="return formVal();"></th>
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