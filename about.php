<?php
    session_start();
	if($_SESSION['logged_in'])
	{
		if((time() - $_SESSION['last_time'])>900)
		{
			header("location: logout.php");
		}
		else
		{
			$_SESSION['last_time'] = time();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>About</title>
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
	<link rel="stylesheet" href="css/team.css" type="text/css" media="all" />
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
	<!-- //Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Traveler</h4>
						<img src="images/bann2.jpg" alt=" " class="img-responsive">
						<h5>What are you waiting?</h5>
						<p>Travel the world with one of the most experienced travel agencies in the area.
                                                When using our services you get personal service like no other online travel agency. If you're from out 
                                                of the area, we can still work with you to secure your vacation plans.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- About -->
	<div class="about">
		<h3 class="tittle">A little about us</h3>
		<div class="banner_bottom_right">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text1">
						</div>
					</li>
					<li>
						<div class="banner-text2">
						</div>
					</li>
					<li>
						<div class="banner-text3">
						</div>
					</li>
					<li>
						<div class="banner-text4">
							<iframe src="https://player.vimeo.com/video/92605278"></iframe>
						</div>
					</li>
				</ul>
			</div>

		</div>
		<div class="col-md-7 banner_bottom_left">
			<h3>Making the most out of your holiday</h3>
			<p class="para-agileits">Travel Agency has provided travelers across the globe with the best care and creativity in travel planning. Planning the 
                            perfect vacation can be a challenge and that's where the experts at Boulder Travel can help. We are a comprehensive leisure travel agency that 
                            gives you convenient access to exclusive travel offers and the highest level of service to get you the most for your vacation dollar.</p>
			<p class="para-agileits">Whether you are planning a honeymoon , the next family vacation or the trip of a lifetime, our professional and dedicated 
                            travel agents are here to take care of the planning and the details necessary to ensure smooth sailing throughout your travel experience. 
                            Let Travel Agency be your travel resource for all the places you want to go, the people you need to see, and the things you want to do. </p>
			<div class="readmore-w3-agileits"><a href="#" data-toggle="modal" data-target="#myModal1">Know More</a></div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //About -->
	<!--sevices-->
	<div class="sevices-w3layouts" id="services">
		<div class="container">
			<h3 class="tittle white">Why we are the best</h3>
			<div class="row">
				<div class="col-md-4 sevices-grid text-right">
					<div class="icon">
						<span class="fa fa-plane" aria-hidden="true"></span>
						<h4>Amazing Travel</h4>
					</div>
					

				</div>
				<div class="col-md-4 sevices-grid text-center">
					<div class="icon">
						<span class="fa fa-thumbs-up" aria-hidden="true"></span>
						<h4>Handpicked Hotels</h4>
					</div>
					
				</div>
				<div class="col-md-4 sevices-grid text-left">
					<div class="icon">
						<span class="fa fa-users" aria-hidden="true"></span>
						<h4>Nice Support</h4>
					</div>
					
				</div>
				<div class="col-md-6 sevices-grid text-right">
					<div class="icon">
						<span class="fa fa-briefcase" aria-hidden="true"></span>
						<h4>World class services</h4>
					</div>
					
				</div>
				<div class="col-md-6 sevices-grid text-left">
					<div class="icon">
						<span class="fa fa-credit-card-alt" aria-hidden="true"></span>
						<h4>Best Price Guarantee</h4>
					</div>
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//sevices-->
	<!-- team -->
	<div class="team featured_services">
		<div class="container">
			<h3 class="tittle">Our Team</h3>
			<div class="agile_wthree_inner_grids">
				
				<div class="col-md-3 w3_agile_team_grid_info">
					<img src="images/kenani.jpg" alt=" " class="img-responsive" />
					<div class="team_agile _icons">
						<h3>Kenan Pallusha</h3>
						<p>Administrator</p>
						<ul class="top-right-info-w3ls">
                                                    <li><a href="https://www.facebook.com/KenanMPallusha" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 w3_agile_team_grid_info">
					<img src="images/arsimi.jpg" alt=" " class="img-responsive" />
					<div class="team_agile _icons">
						<h3>Arsim Osmani</h3>
						<p>Tour Operator</p>
						<ul class="top-right-info-w3ls">
							<li><a href="https://www.facebook.com/arsim.osmani.71" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 w3_agile_team_grid_info">
					<img src="images/arifi.jpg" alt=" " class="img-responsive" />
					<div class="team_agile _icons">
						<h3>Arif Arifi</h3>
						<p>Director</p>
						<ul class="top-right-info-w3ls">
							<li><a href="https://www.facebook.com/arifiiii" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- team -->

	<?php
		include "footer.php";
	?>

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
	<!-- About-Responsiveslides -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: false,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!--// About-Responsiveslides -->

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