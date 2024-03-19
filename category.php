<?php
  include_once('admin/config-user.php');
  
  $catId = $_REQUEST['catid']??0;
//   echo "<pre>";
//   print_r($catId);
//   die();

  if ($catId) {
    $selCate = "SELECT * FROM `categories` WHERE id=".$_REQUEST['catid'];
    $category = $con->query($selCate);
    $_category = $category->fetch_assoc();
  } else {
    header('location: index.php');
    echo "hi";
  }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/head.php'); ?>
</head>
<body>
    <?php include_once('include/header.php'); ?>
<section>
    <div class="title">
        <h1><?= $_category['name'] ?></h1>
    </div>
    <div class="page-data">
        <?= $_category['description'] ?>
    </div>
</section>

<section class="subscribe_section">
    <div class="container-fuild">
    <div class="box">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="subscribe_form ">
                <div class="heading_container heading_center">
                    <h3>Subscribe To Get Discount Offers</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                <form action="">
                    <input type="email" placeholder="Enter your email">
                    <button>
                    subscribe
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>