<!--Header-->
	<div class="header inn-banner" id="home">
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
									<li><a href="index.php" data-hover="Home">Home</a></li>
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
	</div>
	<!--//Header-->
	
	
	
	