`<?php
include_once("admin/config-user.php");

$catId = $_REQUEST['catid']??0;

if($catId) {
    $selCate = "select * from categories where id=".$_REQUEST['catid'];
    $selectData = $con->query($selCate);

    $_category = $selectData->fetch_assoc();
} else {
    header('location: index.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once('includes/head.php'); ?>
</head>
<body>
	<header>
		<?php include_once('includes/menu.php'); ?>
	</header>
	<section>
		<div class="title" style="margin-top:50px;text-align:center;">
			<h1><?= $_category['name'] ?></h1>
		</div>
		<div class="page-data" style="padding:40px 40px;">
            <?= $_category['description'] ?>
        </div>
	</section>

	<section class="form-section" id="contact">
		 <h3>CONTACT</h3>
		<p><i>Fan? Drop a note!</i></p>
		<div class="container2">
			<div class="add">
				<a href="https://goo.gl/maps/b2NHrSRHVb9kje5L6" target="_blank"><ion-icon name="location-outline"></ion-icon>Chicago,US</a><br>
				<a href="tel:98324797321871"><ion-icon name="call-outline"></ion-icon>Phone +00 151515</a><br>
				<a href="mailto:test@gmail.com"><ion-icon name="mail-outline"></ion-icon>Email:mail@mail.com</a><br>
			</div>
			<form>
				<input type="text" name="name" id="name" placeholder="Name">
				<input type="Email" name="email" id="email" placeholder="Email"><br>
				<input type="text" name="message" id="message" placeholder="Message">
				<input type="submit" value="SENT" id="button">
			</form>	
		</div>
	</section>

	<?php include_once('includes/footer.php'); ?>	
	<?php include_once('includes/footer-script.php'); ?>
</body>
</html>