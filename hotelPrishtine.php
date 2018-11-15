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
		<title>Hotels in Prishtina</title>
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
				<h3 class="tittle">Hotels in Prishtina</h3>
					<?php
						include "hotelet.php";
						$hotel1 = array("images/EmeraldHotel.jpg","Emerald");
						$hotel2 = array("images/SwissHotel.jpg","Swiss Diamond");
						$hotel3 = array("images/SiriusHotel.jpg","Sirius");
						$hotel4 = array("images/PrishtinaHotel.jpg","Prishtina");
						$caption1 = "The Emerald Hotel Pristina is more than just a Hotel with its resort like facilities and conference
									rooms that can be used for conventions, exhibitions, conferences and Banquets.
									- All guest rooms feature elegant bathrooms, controlled air-conditioning, windows that
									open, complimentary Wi-Fi, LCD TV with premium cable and international channels,
									direct dial telephone, a tea/coffee maker, in room safe, a minibar and a bathroom with
									hairdryer. The twice-daily maid service includes a nightly turndown service.<br> 
									<b>Price: 92.00&euro; per night</b>";
						$caption2 = "Our hotel is internationally awarded with the 5 Stars Diamond Award International from The American Academy
									of Hospitality Sciences for its luxurious ambiance and the personalized services offered.<br>
									All our accommodations are designed for guests comfort and convenience. Luxurious and elegant, 
									spacious and inviting large marble bathrooms with luxurious amenities, hair dryer, makeup mirror 
									and separate bath-tub and shower.<br>
									<b>Price: 189.00%euro; per night</b>";
						$caption3 = "Located in the centre of Prishtina with professional staff, Hotel Sirius always makes you feel special. 
									Various rooms, equipped with air conditioning system, LCD TV, free internet, mini bar, room service and 
									daily housekeeping, provide comfort that make you feel like your home.
									As a conference center Hotel Sirius offers 7 exclusive conference rooms with flexible space and flawless attention to details. 
									Enjoy dinner at our restaurant located on the 8th floor, endowing each visit with a magnificent view of Prishtina<br>
									<b>Price: 150.00%euro; per night</b>";
						$caption4 = "A decade long family tradition and perfectly positioned, ''Hotel Prishtina'' is known as a reference point, as one of the 
									most hospitable hotels of the capital, which offers its guests an extraordinary experience and the best of Albanian culture.
									“Hotel Prishtina” is one of the most prestigious hotels in Prishtina. With its unique architecture, designed in an original 
									way, with modern equipment, perfectly combines elegance and simplicity of a neoclassical construction.<br>
									<b>Price: 80.00&euro; per night</b>";
						$Prishtina = new hotelet("$hotel1[0]","$hotel1[1]","$caption1","$hotel2[0]","$hotel2[1]","$caption2","$hotel3[0]","$hotel3[1]","$caption3","$hotel4[0]","$hotel4[1]","$caption4");
						echo $Prishtina->output();
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
				  <h4 class="modal-title">Emerald Hotel</h4>
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
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Emerald Hotel" readonly>
						<input type="hidden" name="Hotel" value="Emerald Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="92&euro;" readonly>
						<input type="hidden" name="Price" value="92">
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
				  <h4 class="modal-title">Swiss Diamond Hotel</h4>
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
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Swiss Diamond Hotel" readonly>
						<input type="hidden" name="Hotel" value="Swiss Diamond Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="189&euro;" readonly>
						<input type="hidden" name="Price" value="189">
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
				  <h4 class="modal-title">Sirius Hotel</h4>
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
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Sirius Hotel" readonly>
						<input type="hidden" name="Hotel" value="Sirius Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="150&euro;" readonly>
						<input type="hidden" name="Price" value="150">
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
				  <h4 class="modal-title">Prishtina Hotel</h4>
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
						<input type="text" class="form-control" name="Hotel" id="Hotel" value="Prishtina Hotel" readonly>
						<input type="hidden" name="Hotel" value="Prishtina Hotel">
					</div>
					</div>
					<div class="form-group">
					<label for="Price" class="col-sm-3 control-label">Price:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="Price" id="Price" value="80&euro;" readonly>
						<input type="hidden" name="Price" value="80">
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
