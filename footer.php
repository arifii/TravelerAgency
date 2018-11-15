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
				<p><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">traveleragjency@gmail.com</a></p>
			</div>
			<div class="col-md-6 botttom-nav-agileits">
				<ul class="nav-w3ls">
					<li><a href="#home" class="scroll">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="footer.php">Contact</a></li>
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