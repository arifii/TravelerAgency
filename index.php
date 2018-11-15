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
	<title>Traveler</title>
	
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
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css" /><!-- // calendar -->
	
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,200,400,500,600" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	

</head>

<body>
	<!--Header-->
	<div class="header" id="home">
		<!--top-bar-w3-agile-->
		<div class="top-bar-w3-agile">
			<div class="container">
				<div class="header-top-agileits">
					<div class="agile_forms">
						<p><span class="fa fa-map-marker" aria-hidden="true"></span>Bregu i Diellit, p.n. 10000 Prishtinë</p>
					</div>
					<ul class="top-right-info-w3ls">
						<li><a href="https://www.facebook.com/traveleragjency" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <?php
                                $href = "";
                                $iclass = "";
                                if(isset($_SESSION['email']))
                                {
                                    $href = "profile.php";
                                    $iclass="fa fa-user";
                                }
                                else
                                {
                                    $href="regjistrohu.php";
                                    $iclass="fa fa-sign-in";
                                }
                                echo "<li><a href='".$href."'><i class='".$iclass."' aria-hidden='true'></i></a></li>";
                            ?>

					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="header-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							<h1><a class="navbar-brand" href="index.php">T<span>raveler</span></a></h1>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav class="cl-effect-15" id="cl-effect-15">
								<ul>
                                                                    <li><a href="index.php" class="active" data-hover="Home">Home</a></li>
                                                                    <li><a href="about.php" data-hover="About">About</a></li>
                                                                    <li><a href="gallery.php" data-hover="Gallery">Gallery</a></li>
                                                                    <li><a href="form.php" data-hover="Contact">Contact</a></li>
								</ul>
							</nav>
						</div>
					</nav>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--//top-bar-w3-agile-->
		<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-img-w3layouts one">
							<div class="container">
								<div class="slider-info">
									<h3>Ultimate winter experience provider.</h3>
									<p>"To appreciate the beauty of a snowflake it is necessary to stand out in the cold."</p>
									<div class="readmore-w3-agileits"><a href="#" data-toggle="modal" data-target="#myModal1">Know More</a></div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-w3layouts two">
							<div class="container">
								<div class="slider-info">
									<h3>Thai wonder, hidden in the jungle.</h3>
									<p>"Let's find some beautiful place to get lost."</p>
									<div class="readmore-w3-agileits"><a href="#" data-toggle="modal" data-target="#myModal1">Know More</a></div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-w3layouts three">
							<div class="container">
								<div class="slider-info">
									<h3>Going deep into the isle of hawaii.</h3>
									<p>"People forget years and remember moments."</p>
									<div class="readmore-w3-agileits"><a href="#" data-toggle="modal" data-target="#myModal1">Know More</a></div>
								</div>
							</div>
						</div>
					</li>

				</ul>

			</div>
			<div class="clearfix"></div>
		</div>
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
		<!--//Slider-->
	</div>
	<!--//Header-->
	<!--banner form-->
	<div id="horizontalTab">
		<ul class="resp-tabs-list">
			<li>Hotels</li>
		</ul>
		<div class="resp-tabs-container">
			<div class="tab1">
				<?php
					$action = "";
					if(isset($_SESSION['email']))
					{
						$action = "hotels.php";
					}
					else
					{
						$action = "redirect.php";
					}
					echo "<form action='".$action."' method='post'>";
				?>
                
					<div class="col-md-4 fields">
						<span>City</span>
						<?php
                            include "mySqlConn.php";
                            $combo="<select class='form-control' name='City'><option>Select</option>";
                            $sql = "SELECT * FROM Cities";
                            if($result=$mysqli->query($sql))
                            {
                                if($result->num_rows)
                                {
                                    while($row=$result->fetch_object())
                                    {
                                        $combo.="<option value='".$row->City."'>".$row->City."</option>";
                                    }
                                    $result->free();
                                }
                            }
                            $combo.="</select>";
                            echo $combo;
                                                ?> 									
					</div>
					<div class="col-md-2 fields">
						<span>Check-In</span>
						<input id="datepicker" name="Check-In" type="text"  onfocus="this.value = '';" placeholder="mm/dd/yyyy"
						    required autocomplete="off">
					</div>
					<div class="col-md-2 fields">
						<span>Check-Out</span>
						<input id="datepicker1" name="Check-Out" type="text" placeholder="mm/dd/yyyy" onfocus="this.value = '';" 
						    required autocomplete="off">
					</div>
					<div class="col-md-2 fields">
						<span>Adults</span>
						<select class="form-control" name="Adults">
										<option value="select">select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
					</div>
					<div class="col-md-2">
						<input name='hotels' type="submit" value="Submit">
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//banner form-->

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
	<!--blog -->
	<div class="blog" id="blog">
		<div class="container">
			<h3 class="tittle">Blog</h3>
			<div class="blog-grid-w3-agileits">
				<div class=" col-md-7 blog-img blog-img1-agileits-w3layouts">
					<a href="#" data-toggle="modal" data-target="#myModal2">
						<h6>Cinque terre town italy village</h6>
						<p><span class="fa fa-clock-o" aria-hidden="true"></span>12 feb 2017</p>
					</a>
				</div>
				<div class=" col-md-5 blog-info-w3layouts">
					<div class="inner-info-w3ls">
						<h5>Italy</h5>
						<p class="para-agileits">Over the centuries, people have carefully built terraces on the 
                                                    rugged, steep landscape right up to the cliffs that overlook the sea. Part of its 
                                                    charm is the lack of visible corporate development. Paths, trains and boats connect 
                                                    the villages, and cars cannot reach them from the outside. </p>
					</div>
					<a href="#" class="blog-more-agile" data-toggle="modal" data-target="#myModal2">Read More</a>

				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-grid-w3-agileits">
				<div class=" col-md-5 blog-info-w3layouts blog-mid">
					<div class="inner-info-w3ls-mid">
						<h5>Paris</h5>
                                                <p class="para-agileits">"Paris is always a good idea."<br>
                                                    Audrey Hepburn</p>
					</div>
					<a href="#" class="blog-more-agile" data-toggle="modal" data-target="#myModal3">Read More</a>

				</div>
				<div class=" col-md-7 blog-img blog-img2-agileits-w3layouts">
					<a href="#" data-toggle="modal" data-target="#myModal3">
						<h6>Paris france french Eiffel tower</h6>
						<p><span class="fa fa-clock-o" aria-hidden="true"></span>21 Jan 2017</p>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-grid-w3-agileits">
				<div class=" col-md-7 blog-img blog-img3-agileits-w3layouts">
					<a href="#" data-toggle="modal" data-target="#myModal4">
						<h6>San francisco California city urban</h6>
						<p><span class="fa fa-clock-o" aria-hidden="true"></span>01 Jan 2017</p>
					</a>
				</div>
				<div class=" col-md-5 blog-info-w3layouts">
					<div class="inner-info-w3ls">
						<h5>California</h5>
						<p class="para-agileits">San Francisco is a major city in California, the centerpiece of 
                                                    the Bay Area, well-known for its liberal community, hilly terrain, Victorian architecture, 
                                                    scenic beauty, summer fog, and great ethnic and cultural diversity. These are only a few of 
                                                    the aspects of the city that make San Francisco one of the most visited cities in the world. </p>
					</div>
					<a href="#" class="blog-more-agile" data-toggle="modal" data-target="#myModal4">Read More</a>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //blog -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Traveler</h4>
					<img src="images/g2.jpg" alt=" " class="img-responsive">
					<h5>Cinque terre town italy village</h5>
					<p>Cinque Terre, which means Five Lands, comprise the five small coastal villages 
                                            of Riomaggiore, Manarola, Corniglia, Vernazza and Monterosso located in the 
                                            Italian region of Liguria. They are listed on the UNESCO World Heritage List.
                                            The main attraction of the Cinque Terre is the landscape. Mediterranean herbs 
                                            and trees grow spontaneously from the top of the hills down to the water level. 
                                            Well embedded in this magnificent natural scenery, one can admire the intense human 
                                            activity of the ancestors, when the wine terraces were built. 
                                            The Cinque Terre area is a very popular tourist destination.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- Modal3 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Traveler</h4>
					<img src="images/g5.jpg" alt=" " class="img-responsive">
					<h5>Paris france french Eiffel tower</h5>
					<p>Paris, the cosmopolitan capital of France, is one Europe's largest cities, 
                                            with 2.2 million people living in the dense, central city and almost 12 million 
                                            people living in the whole metropolitan area. Located in the north of France on 
                                            the river Seine, Paris has the well deserved reputation of being the most beautiful 
                                            and romantic of all cities, brimming with historic associations and remaining vastly 
                                            influential in the realms of culture, art, fashion, food and design. Dubbed the City 
                                            of Light (la Ville Lumière) and Capital of Fashion, it is home to the world's finest 
                                            and most luxurious fashion designers and cosmetics, such as Chanel, Dior, Yves Saint-Laurent, 
                                            Guerlain, Lancôme, L'Oréal, Clarins, etc.  The city has the second highest number of Michelin 
                                            restaurants in the world (after Tokyo) and contains numerous iconic landmarks, such as the world's 
                                            most visited tourist site the Eiffel Tower, the Arc de Triomphe, the Notre-Dame Cathedral, the Louvre Museum, 
                                            Moulin Rouge, and Lido, making it the most popular tourist destination in the world with 45 million tourists annually. </p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal3 -->
	<!-- Modal4 -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Traveler</h4>
					<img src="images/g7.jpg" alt=" " class="img-responsive">
					<h5>San francisco California city urban</h5>
					<p>San Francisco is physically quite compact. It is located on a seven-by-seven mile (11 x 11km) square of land at the tip of a 
                                            peninsula between the San Francisco Bay and the Pacific coast. It has a population of 812,000 which represents a small 
                                            fraction of the entire Bay Area population of 7.1 million. San Francisco is just one of the cities which makes up the entire 
                                            San Francisco Bay Area. San Francisco's neighbors -Oakland and Berkeley east of the Bay Bridge, Marin County north of the 
                                            Golden Gate Bridge, and the Peninsula south of the city are all part of separate counties, each with their own governments and 
                                            local public transportation systems</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal4 -->

	<!-- //blog -->

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
	<div class="w3l_footer_agileinfo">
		<div class="container">
			<div class="col-md-3 mailadd-w3ls">
				<p><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">traveleragency@gmail.com</a></p>
			</div>
			<div class="col-md-6 botttom-nav-agileits">
				<ul class="nav-w3ls">
					<li><a href="#home" class="scroll">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3l-social">
				<ul class="top-right-info-w3ls">
					<li><a href="https://www.facebook.com/traveleragjency"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<?php
						$href = "";
						$iclass = "";
						if(isset($_SESSION['email']))
						{
							$href = "profile.php";
							$iclass="fa fa-user";
						}
						else
						{
							$href="regjistrohu.php";
							$iclass="fa fa-sign-in";
						}
						echo "<li><a href='".$href."'><i class='".$iclass."' aria-hidden='true'></i></a></li>";
					?>

				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Footer -->
	<!--Copy-right-->
	<div class="copy">
		<div class="container">
			<h2><a href="index.php"><span>T</span>raveler</a></h2>
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
	<!-- //js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 1000,
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
	<!--Rersponsive tabs-->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- //Rersponsive tabs -->

	<!-- testimonials required-js-files-->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!--// testimonials required-js-files-->

	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->


	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3,#datepicker4,#datepicker5").datepicker();
		});
	</script>
	<!-- //Calendar -->
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