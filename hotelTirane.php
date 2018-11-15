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
<html>
    <head>
		<title>Hotels in Tirana</title>
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
            require 'header.php';
        ?>
        <!--gallery-->
	<div class="gallery">
		<div class="container">
				<h3 class="tittle">Hotels in Tirana</h3>
				<?php
					include "hotelet.php";
					$hotel1 = array("images/XhekoHotel.jpg","Xheko Imperial");
					$hotel2 = array("images/MondialHotel.jpg","Mondial");
					$hotel3 = array("images/RognerHotel.jpg","Rogner");
					$hotel4 = array("images/BujtinaHotel.jpg","Bujtina e Gjelit");
					$caption1 = "Xheko Imperial is a hotel of the highest quality, 
						featuring a refined alliance between luxury and tradition, that 
						offers its guests a memorable experience set in architecture and 
						luxury not found elsewhere in Albania.<br> 
						<b>Price: 144.00&euro; per night</b>";
					$caption2 = "Mondial brand was created in 1991 as a Bar and Restaurant and after 1997 was developed as Hotel. 
						In 2016 the hotel was totally reconstructed. All our cozy rooms are stylishly appointed and feature modern 
						technology merged with a neoclassical style. The hotel has 36 Rooms in different categories like Suite, Deluxe, 
						Adjoining Room, Superior and Standard Rooms.<br>
						<b>Price: 90.00%euro; per night</b>";
					$caption3 = "It is the most famous and sophisticated address in town and the first hotel in Albania to be built according
						to international standards, located directly on Dëshmorët e Kombit Boulevard, in the heart of Tirana. Our hospitality and 
						service, the comfort and security make the hotel the meeting place of the economical, diplomatic and cultural elite of Albania. 
						The seat of the Parliament, the President's Office, the Prime Minister's Office and many diplomatic embassies are within walking 
						distance. Our famous Mediterranean garden with 30.000 square meters unrivalled within Albania is an oasis of tranquillity and recreation 
						in the centre of bustling Tirana.<br>
						<b>Price: 142.00%euro; per night</b>";
					$caption4 = "Bujtina e Gjelit, constructed in 1994 by a family with strong connections to the Albanian art and traditional values. Shingled 
						roof, iron, stone and wood works in fine details created in an artisan manner by the Albanian masters. Folkloric suits and traditional home 
						interiors make all even more special. For many years, the hotel has tried to faithfully transmit to the costumers, the architectonic and culinary 
						values of the Albanian and Balkan tradition.<br>
						<b>Price: 72.00&euro; per night</b>";

					$Tirana = new hotelet("$hotel1[0]","$hotel1[1]","$caption1","$hotel2[0]","$hotel2[1]","$caption2","$hotel3[0]","$hotel3[1]","$caption3","$hotel4[0]","$hotel4[1]","$caption4");
					echo $Tirana->output();
				?>
		</div>
	</div>
	<!--//gallery-->

	
	<?php
		require "footer.php";
	?>
		<!-- The Modal -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog modal-dialog-centered">
			  <div class="modal-content">
			  
				<!-- Modal Header -->
				<div class="modal-header">
				  <h4 class="modal-title">Xheko Imperial Hotel</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
					<form class="form-horizontal" action="rezervo.php" method="post">
					<div class="form-group">
					<label for="Name" class="col-sm-3 control-label">Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Name" id="Name" value="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>" readonly>
						<input type="hidden" name="Name" value="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Email" class="col-sm-3 control-label">Email:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Email" id="Email" value="<?php echo $_SESSION['email'];?>" readonly>
						<input type="hidden" name="Email"  value="<?php echo $_SESSION['email'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="CheckIn" class="col-sm-3 control-label">Check In:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="CheckIn" id="CheckIn" value="<?php echo $_COOKIE['CheckIn'];?>" readonly>
						<input type="hidden" name="CheckIn" value="<?php echo $_COOKIE['CheckIn'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="CheckOut" class="col-sm-3 control-label">Check Out:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="CheckOut" id="CheckOut" value="<?php echo $_COOKIE['CheckOut'];?>" readonly>
						<input type="hidden" name="CheckOut" value="<?php echo $_COOKIE['CheckOut'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Adults" class="col-sm-3 control-label">Adults:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Adults" id="Adults" value="<?php echo $_COOKIE['Adults'];?>" readonly>
						<input type="hidden" name="Adults" value="<?php echo $_COOKIE['Adults'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Hotel" class="col-sm-3 control-label">Hotel:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Xheko Imperial Hotel" readonly>
						<input type="hidden" name="Hotel" value="Xheko Imperial Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="144&euro;" readonly>
						<input type="hidden" name="Price" value="144">
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" name="Reserve" class="btn btn-default">Reserve</button>
					</div>
					</div>
					</form>
				</div>
				
				<!-- Modal footer -->
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div>
		</div>
		<!-- The Modal -->
		<div class="modal fade" id="myModa2">
			<div class="modal-dialog modal-dialog-centered">
			  <div class="modal-content">
			  
				<!-- Modal Header -->
				<div class="modal-header">
				  <h4 class="modal-title">Mondial Hotel</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
					<form class="form-horizontal" action="rezervo.php" method="post">
					<div class="form-group">
					<label for="Name" class="col-sm-3 control-label">Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Name" id="Name" value="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>" readonly>
						<input type="hidden" name="Name" value="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Email" class="col-sm-3 control-label">Email:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Email" id="Email" value="<?php echo $_SESSION['email'];?>" readonly>
						<input type="hidden" name="Email"  value="<?php echo $_SESSION['email'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="CheckIn" class="col-sm-3 control-label">Check In:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="CheckIn" id="CheckIn" value="<?php echo $_COOKIE['CheckIn'];?>" readonly>
						<input type="hidden" name="CheckIn" value="<?php echo $_COOKIE['CheckIn'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="CheckOut" class="col-sm-3 control-label">Check Out:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="CheckOut" id="CheckOut" value="<?php echo $_COOKIE['CheckOut'];?>" readonly>
						<input type="hidden" name="CheckOut" value="<?php echo $_COOKIE['CheckOut'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Adults" class="col-sm-3 control-label">Adults:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Adults" id="Adults" value="<?php echo $_COOKIE['Adults'];?>" readonly>
						<input type="hidden" name="Adults" value="<?php echo $_COOKIE['Adults'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Hotel" class="col-sm-3 control-label">Hotel:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Mondial Hotel" readonly>
						<input type="hidden" name="Hotel" value="Mondial Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="90&euro;" readonly>
						<input type="hidden" name="Price" value="90">
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" name="Reserve" class="btn btn-default">Reserve</button>
					</div>
					</div>
					</form>
				</div>
				
				<!-- Modal footer -->
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div>
		</div>
		<!-- The Modal -->
		<div class="modal fade" id="myModa3">
			<div class="modal-dialog modal-dialog-centered">
			  <div class="modal-content">
			  
				<!-- Modal Header -->
				<div class="modal-header">
				  <h4 class="modal-title">Rogner Hotel</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
					<form class="form-horizontal" action="rezervo.php" method="post">
					<div class="form-group">
					<label for="Name" class="col-sm-3 control-label">Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Name" id="Name" value="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>" readonly>
						<input type="hidden" name="Name" value="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Email" class="col-sm-3 control-label">Email:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Email" id="Email" value="<?php echo $_SESSION['email'];?>" readonly>
						<input type="hidden" name="Email"  value="<?php echo $_SESSION['email'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="CheckIn" class="col-sm-3 control-label">Check In:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="CheckIn" id="CheckIn" value="<?php echo $_COOKIE['CheckIn'];?>" readonly>
						<input type="hidden" name="CheckIn" value="<?php echo $_COOKIE['CheckIn'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="CheckOut" class="col-sm-3 control-label">Check Out:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="CheckOut" id="CheckOut" value="<?php echo $_COOKIE['CheckOut'];?>" readonly>
						<input type="hidden" name="CheckOut" value="<?php echo $_COOKIE['CheckOut'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Adults" class="col-sm-3 control-label">Adults:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Adults" id="Adults" value="<?php echo $_COOKIE['Adults'];?>" readonly>
						<input type="hidden" name="Adults" value="<?php echo $_COOKIE['Adults'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Hotel" class="col-sm-3 control-label">Hotel:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Rogner Hotel" readonly>
						<input type="hidden" name="Hotel" value="Rogner Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="142&euro;" readonly>
						<input type="hidden" name="Price" value="142">
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" name="Reserve" class="btn btn-default">Reserve</button>
					</div>
					</div>
					</form>
				</div>
				
				<!-- Modal footer -->
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div>
		</div>
		<!-- The Modal -->
		<div class="modal fade" id="myModa4">
			<div class="modal-dialog modal-dialog-centered">
			  <div class="modal-content">
			  
				<!-- Modal Header -->
				<div class="modal-header">
				  <h4 class="modal-title">Bujtina e Gjelit Hotel</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
					<form class="form-horizontal" action="rezervo.php" method="post">
					<div class="form-group">
					<label for="Name" class="col-sm-3 control-label">Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Name" id="Name" value="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>" readonly>
						<input type="hidden" name="Name" value="<?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Email" class="col-sm-3 control-label">Email:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Email" id="Email" value="<?php echo $_SESSION['email'];?>" readonly>
						<input type="hidden" name="Email"  value="<?php echo $_SESSION['email'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="CheckIn" class="col-sm-3 control-label">Check In:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="CheckIn" id="CheckIn" value="<?php echo $_COOKIE['CheckIn'];?>" readonly>
						<input type="hidden" name="CheckIn" value="<?php echo $_COOKIE['CheckIn'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="CheckOut" class="col-sm-3 control-label">Check Out:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="CheckOut" id="CheckOut" value="<?php echo $_COOKIE['CheckOut'];?>" readonly>
						<input type="hidden" name="CheckOut" value="<?php echo $_COOKIE['CheckOut'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Adults" class="col-sm-3 control-label">Adults:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Adults" id="Adults" value="<?php echo $_COOKIE['Adults'];?>" readonly>
						<input type="hidden" name="Adults" value="<?php echo $_COOKIE['Adults'];?>">
					</div>
					</div>
					<div class="form-group">
					<label for="Hotel" class="col-sm-3 control-label">Hotel:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Bujtina e Gjelit Hotel" readonly>
						<input type="hidden" name="Hotel" value="Bujtina e Gjelit Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="72&euro;" readonly>
						<input type="hidden" name="Price" value="72">
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" name="Reserve" class="btn btn-default">Reserve</button>
					</div>
					</div>
					</form>
				</div>
				
				<!-- Modal footer -->
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div>
		</div>

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
