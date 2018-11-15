<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Gallivant Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- // Style-sheets -->
	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,200,400,500,600" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--// Online-fonts -->

</head>

<body>
	<?php
		include "header.php";
	?>


	<!--contact-->
	<div class="contact-w3-agileits">
		<div class="container">
			<h3 class="tittle">Contact Us</h3>
			<div class="form">
                            <form action="send-mail.php" method="post">
					<div class="styled-input">
						<input type="text" name="FullName" placeholder="Name" required="">
					</div>
					<div class="styled-input">
						<input type="email" name="Email" placeholder="Email" required="">
					</div>
					<div class="clearfix"> </div>
					<textarea name="Message" placeholder="Message..." required=""></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
	<!--//contact -->
	<!-- Footer -->
	<div class="reach-wthree">
		<div class="container">
			<h3>Reach Us</h3>
			<div class="reach-right-agileits-w3layouts">
				<p>Bregu i Diellit, p.n. 10000 Prishtinë,</p>
				<p>Republika e Kosovës</p>
				<h6><span class="fa fa-phone" aria-hidden="true"></span> (+383) 49-000-000</h6>
			</div>
		</div>
	</div>
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2934.606371563151!2d21.1648232!3d42.6485041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b6ecb2c1%3A0x7f0893730efce187!2sFakultetet+Teknike!5e0!3m2!1sen!2s!4v1522334844792" width="1519" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="w3l_footer_agileinfo">
		<div class="container">
			<div class="col-md-3 mailadd-w3ls">
				<p><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></p>
			</div>
			<div class="col-md-6 botttom-nav-agileits">
				<ul class="nav-w3ls">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3l-social">
				<ul class="top-right-info-w3ls">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Footer -->
	<!--Copy-right-->
	<div class="copy">
		<div class="container">
			<h2><a href="index.html"><span>T</span>raveler</a></h2>
			<p>© 2018 Traveler . All Rights Reserved</p>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--// Copy-right -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>

	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>

</html>