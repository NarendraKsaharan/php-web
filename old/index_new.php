<?php
include_once('admin/config-user.php');

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
		<img src="img/chicago.jpg">
		<div class="chicago">
			<h2>Chicago</h2>
			<p>Thank you, Chicago - A night we won't forget.</p>
		</div>
	</section>

	<section id="band">
		<div class="container">
		<div class="band">
			<h2>THE BAND</h2>
			<span><i>We Love Music</i></span>
			<p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="boxes">
			<div class="box1">
				<h3>Name</h3>
				<img src="img/1.jpg">
			</div>
			<div class="box2">
				<h3>Name</h3>
				<img src="img/1.jpg">
			</div>
			<div class="box3">
				<h3>Name</h3>
				<img src="img/1.jpg">
			</div>
		</div>	
		</div>
	</section>

	<section id="tour">
		<div class="tour">
			<h2>TOUR DATES</h2>
			<p><i>Remember to book your tickets!</i></p>
			<div class="tour-section">
				<div class="book">
					<p>September   <span>Sold Out</span></p>
				</div>
				<div class="book">
					<p>October   <span>Sold Out</span></p>
				</div>
				<div class="book">
					<div>
						<p>November</p>
					</div>
					<span>3</span>
				</div>
				<div class="city">
					<div class="newyork">
						<img src="img/newyork.jpg">
						<h4>New York</h4>
						<span>Fri 27 Nov 2016</span>
						<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
						<a href="#">Buy Tickets</a>
					</div>
					<div class="paris">
						<img src="img/paris.jpg">
						<h4>Paris</h4>
						<span>Sat 28 Nov 2016</span>
						<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
						<a href="#">Buy Tickets</a>
					</div>
					<div class="sanfran">
						<img src="img/sanfran.jpg">
						<h4>San Francisco</h4>
						<span>Sun 29 Nov 2016</span>
						<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
						<a href="#">Buy Tickets</a>
					</div>
				</div>
			</div>
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