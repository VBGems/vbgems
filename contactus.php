<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>VB Gems</title>
		<link rel="shortcut icon" type="x-icon" href="images/vbgems.png"/>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

	<?php
	if(!empty($_POST["send"])) {
		$userEmail = $_POST["email"];
		$userFirstName = $_POST["firstname"];
		$userLastName = $_POST["lastname"];
		$userMessage = $_POST["message"];
		$toEmail = "vbgems0@yahoo.com";

		$mailHeaders = "Name: " . $userFirstName . " " . $userLastName . "\r\n Message: " . $userMessage . "\r\n";


		if(mail($toEmail, $userEmail, $mailHeaders)) {
			$message = "We have received your request Successfully !";
		} else {
			$message = "Not able to send mail succesfully!";
		}
	}
	?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">VB GEMS</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="index.php">Products</a></li>
							<li><a href="aboutus.php">About Us</a></li>
							<li class="active"><a href="contactus.php">Contact Us</a></li>
						</ul>
						<ul class="icons">
							<li><a href="https://www.instagram.com/vb_gems?igsh=MXd5NHRqa2VkOGU1bQ%3D%3D&utm_source=qr" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<!-- <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li> -->
							<li><a href="https://www.facebook.com/profile.php?id=61555500694440&notif_id=1705093248919540&notif_t=follower_invite_accept&ref=notif" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://pin.it/6aWFpM1a3" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<span class="date">We Are Happy To Help You.</span>
									
								</header>
								<h1>Leave A Message</h1>







									<div class="row">

										
									<div class="col-6 col-12-small">


									<form method="post" action="">
										<div class="row gtr-uniform">
										<?php if($message == "") { ?>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="firstname" id="firstname" value="" placeholder="First Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="lastname" id="lastname" value="" placeholder="Last Name" />
											</div>
											<div class="col-12">
												<input type="email" name="email" id="email" value="" placeholder="email" required="" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="companyname" id="companyname" value="" placeholder="Company Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="tel" name="mobile" id="mobile" pattern="\(?\+\(?49\)?[ ()]?([- ()]?\d[- ()]?){10}" value="" placeholder="Mobile" />
											</div>
											<!-- Break -->
											<div class="col-12">
												<textarea name="message" style="height: 350px" id="message" placeholder="Enter your message" rows="6" ></textarea>
											</div>
											<!-- Break -->
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="send" value="Send Message" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
											<?php } else { ?>
											<div>
											<strong class="success"><?php echo $message; ?> </strong>
											</div>
											<?php } ?>
										</div>
									</form>
										</div>
										<div class="col-6 col-12-small">

											<footer id="footer">
											<section class="split contact">
												<section class="alt">
													<h3>Address</h3>
													<p>22/23 Madhav Building, L.H. Road<br />
													Surat-395006, India </p>
												</section>
												<section class="alt">
													<h3>Phone</h3>
													<p> +91 97254 40108<br />
													(0261) 2555554</p>
													<!--<p><a href="#"> +91 9725440108 </a></p>-->
												</section>
												<section class="alt">
													<h3>Email</h3>
													<p><a href="#">d.bhikadiya@yahoo.co.in</a><br />
													<a href="#">vbgems0@yahoo.com</a></p>
												</section>
												<section >
													<h3>Social</h3>
													<ul class="icons alt">
														<li><a href="https://www.instagram.com/vb_gems?igsh=MXd5NHRqa2VkOGU1bQ%3D%3D&utm_source=qr" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
														<!-- <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li> -->
														<li><a href="https://www.facebook.com/profile.php?id=61555500694440&notif_id=1705093248919540&notif_t=follower_invite_accept&ref=notif" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
														<li><a href="https://pin.it/6aWFpM1a3" class="icon brands alt fa-pinterest"><span class="label">Pinterest</span></a></li>
													</ul>
												</section>
											</section>
											</footer>
										</div>
									</div>



							</section>

					</div>

				<!-- Footer -->

				<!-- Copyright -->
					<div id="copyright">
					<ul><li>&copy; VB Gems 2024</li>
						<ul class="icons">
							<li><a href="https://www.instagram.com/vb_gems?igsh=MXd5NHRqa2VkOGU1bQ%3D%3D&utm_source=qr" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<!-- <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li> -->
							<li><a href="https://www.facebook.com/profile.php?id=61555500694440&notif_id=1705093248919540&notif_t=follower_invite_accept&ref=notif" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://pin.it/6aWFpM1a3" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>


$("#btn").on("click", function(){
if($("#the-form")[0].checkValidity())
{
    alert('validated');
}
else
{
  return 0;
}