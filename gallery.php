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
	<title>Gallery</title>
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
	<link rel="stylesheet" href="css/lightbox.css">
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
	<!--gallery-->
	<div class="gallery">
		<div class="container">
				<h3 class="tittle">Gallery</h3>
			<div class="agileinfo-gallery">
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="w3 wow zoomIn animated" data-wow-delay=".5s" href="images/g1.jpg" data-lightbox="example-set">
						<img src="images/g1.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5>Malaysia</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g3.jpg" data-lightbox="example-set">
						<img src="images/g3.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5>Indonesia</h5>
						</div>
					</a>
				</div>
				<div class="col-md-6 w3-agileits-gallery-grids gallery-two wthree">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g2.jpg" data-lightbox="example-set">
						<img src="images/g2.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5>Italy</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g4.jpg" data-lightbox="example-set">
						<img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5>Sydney</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g6.jpg" data-lightbox="example-set">
						<img src="images/g6.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5>Seoul</h5>
						</div>
					</a>
				</div>
				<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g5.jpg" data-lightbox="example-set">
						<img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5>Paris</h5>
						</div>
					</a>
				</div>
				<div class="col-md-6 w3-agileits-gallery-grids gallery-two w3agile-two">
					<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g7.jpg" data-lightbox="example-set">
						<img src="images/g7.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5>California</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g8.jpg" data-lightbox="example-set">
						<img src="images/g8.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5>Melbourne</h5>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g9.jpg" data-lightbox="example-set">
						<img src="images/g9.jpg" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<h5>Italy</h5>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//gallery-->

	
	<?php
		include "footer.php";
	?>

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!--light-box-files -->
	<script src="js/lightbox-plus-jquery.min.js">
	</script>
	<!--//light-box-files -->
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