<?php
	require "mySqlConn.php";
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
		<title>Hotels in Skopje</title>
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
				<h3 class="tittle">Hotels in Skopje</h3>
				<?php
					include "hotelet.php";
					$hotel1 = array("images/MarriotHotel.jpg","Marriot");
					$hotel2 = array("images/ParkHotel.jpg","Park Hotel and Spa");
					$hotel3 = array("images/HolidayHotel.jpg","Holiday Inn");
					$hotel4 = array("images/SenigalliaHotel.jpg","Senigallia");
					$caption1 = "Whether you're visiting Macedonia for business or on vacation, you'll love the stylish accommodation, friendly 
					service and convenient city centre location of Skopje Marriott Hotel. Settle in to one of our sophisticated rooms and suites, 
					which offer large flat-screen TVs, deluxe bedding, 24-hour room service and Wi-Fi access. Some accommodations boast scenic Macedonia 
					Square views as well. Maintain your fitness while in Skopje with a workout in the gym or a swim in the heated indoor pool, followed 
					by a relaxing treatment in our luxurious hotel spa.<br> 
						<b>Price: 240.00&euro; per night</b>";
					$caption2 = "Real point of hospitality for all our guests who travel and stay in Skopje, where we provide a pleasant stay tailored to 
					their unique needs brought through our team and its helpfulness, the hotel location as well as its contents.<br>
						<b>Price: 145.00%euro; per night</b>";
					$caption3 = "
						<b>Price: 86.00%euro; per night</b>";
					$caption4 = "Location of the hotel is great. You will find comfortable beds and clean rooms. You stay on the river but sound isolation is quite enough. 
					If you want to hear flowing water open the windows, if you don't, just close them. Breakfast is perfect. Hotel staff do their job well.<br>
						<b>Price: 77.00&euro; per night</b>";
					$Shkup = new hotelet("$hotel1[0]","$hotel1[1]","$caption1","$hotel2[0]","$hotel2[1]","$caption2","$hotel3[0]","$hotel3[1]","$caption3","$hotel4[0]","$hotel4[1]","$caption4");
					echo $Shkup->output();
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
				  <h4 class="modal-title">Marriot Hotel</h4>
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
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Marriot Hotel" readonly>
						<input type="hidden" name="Hotel" value="Marriot Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="240&euro;" readonly>
						<input type="hidden" name="Price" value="240">
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
				  <h4 class="modal-title">Park Hotel and Spa</h4>
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
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Park Hotel and Spa" readonly>
						<input type="hidden" name="Hotel" value="Park Hotel and Spa">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="145&euro;" readonly>
						<input type="hidden" name="Price" value="145">
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
				  <h4 class="modal-title">Holiday Inn Hotel</h4>
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
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Holiday Inn Hotel" readonly>
						<input type="hidden" name="Hotel" value="Holiday Inn Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="86&euro;" readonly>
						<input type="hidden" name="Price" value="86">
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
				  <h4 class="modal-title">Senigallia Hotel</h4>
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
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Senigallia Hotel" readonly>
						<input type="hidden" name="Hotel" value="Senigallia Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="77&euro;" readonly>
						<input type="hidden" name="Price" value="77">
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
