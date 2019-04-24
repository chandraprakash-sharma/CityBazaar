<html>
	<head>
		<title>City-Bazaar</title>
		<link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../style/bootstrap/js/jquery.min.js"></script>
		<script src="../style/bootstrap/js/bootstrap.min.js"></script>
		<link href="../style/fontawesome-5/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
		<link href="../style/custom-style.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta charset="UTF-8">
	</head>
	<body>
		<header class="container-fluid text-center">
			<div class="row navi">
				<nav class="navbar nabar-fixed ">
					<div class="col-sm-2 col-lg-2 sitename">
						<!--<a href="home.html" class="lead"><span class="fn">City</span><span class="sn">Bazzar</span></a>-->
						<img src="../images/New-City-Bazaar.png" class="img-responsive" alt="city-bazzar" title="City-Bazaar">
					</div>
					<div class="col-sm-3 col-lg-3 sl">
						<ul class="nav navbar-nav">
							<li><a href="home.php"><i class="fas fa-home">&nbsp;&nbsp;</i>Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact US</a></li>
						</ul>
					</div>
					<div class="col-sm-3 col-lg-3 search-form">
						<form class="navbar-form  form-horizontal" action="" method="post">
  							<div class="input-group">
								<input type="search" class="form-control" placeholder="Search...">
								<div class="input-group-btn sbtn">
									<button type="submit" class="form-control btn btn-default"><i class="fas fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-4 col-lg-4">
						<ul class="nav navbar-nav social-icon">
							<li><a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a></li>
							<li><a href="https://www.instagram.com/?hl=en"><span class="fab fa-twitter"></span></a></li>
							<li><a href="https://twitter.com/login?lang=en"><span class="fab fa-instagram"></span></a></li>
						</ul>
						<div class="btns text-center">
							<a href="#" class="btn btn-default" data-toggle="modal" data-target="#mymodal">Free Listing</a>
							<a href="login.php" class="btn btn-default">Log in</a>
							
							<div class="modal fade" id="mymodal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title text-primary">Free Listing</h4>
										</div>
										<div class="modal-body">
											<h5 class="text-info"><b>List Your Business Free</b></h5><br>
											
											<form role="form" class="form-horizontal" method="post" action="listing-form.html">
												<div class="input-group">
													<span class="input-group-addon"><i class="fas fa-user"></i></span>
													<input type="text" id="cn" name="cn" class="form-control" required placeholder="Company name">
												</div>
												<br>
												<div class="input-group">
													<span class="input-group-addon"><i class="fas fa-globe"></i></span>
													<input type="text" id="cn" name="cn" class="form-control" required placeholder="City">
												</div>
												<br>
												<div class="input-group">
													<span class="input-group-addon"><i class="fas fa-arrow-right"></i></span>
													<input type="text" id="cn" name="cn" class="form-control" required placeholder="First name">
												</div>
												<br>
												<div class="input-group">
													<span class="input-group-addon"><i class="fas fa-arrow-right"></i></span>
													<input type="text" id="cn" name="cn" class="form-control" required placeholder="Last Name">
												</div>
												<br>
												<div class="input-group">
													<span class="input-group-addon"><i class="">+91</i></span>
													<input type="tel" id="contact" name="contact" class="form-control" placeholder="contact">
												</div>
												<br>
												
												<input type="submit" name="sub" class="btn btn-dafault">
														
											</form>
										</div>
										<div class="modal-footer">
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<hr class="navbar-hr">
			</div>
		</header>
		<section class="container">
			<div class="row">
				<div class="col-sm-3 lfbtn">
					<ul class="nav nav-tabs nav-stacked text-center">
						<li><a href="#location-form" data-toggle="tab" >Loaction Information</a></li>
						<li><a href="#contact-form" data-toggle="tab">Contact Information</a></li>
						<li><a href="#images" data-toggle="tab">Business Detail</a></li>
					</ul>
				</div>
				<div class="col-sm-9 listing-box">
					<div class="tab-content">
						<div id="location-form" class="tab-pane fade in active lb1">
							<h2 class="text-info">Loaction Information</h2>
							<br>
							<form role="form" class="form-horizontal text-center">
								<div class="input-group">
									<span class="input-group-addon"> <i class="fas fa-user"></i> </span>
									<input type="text" class="form-control" name="bname" placeholder="Business Name">
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fas fa-address-card"></i> </span>
									<textarea cols="2" rows="3" class="form-control" placeholder="Address" name="address"></textarea>
								</div><br>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fas fa-university"></i> </span>
									<input type="text" class="form-control" name="city" placeholder="City">
								</div><br>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fas fa-university "></i> </span>
									<input type="text" class="form-control" name="state" placeholder="State">
								</div><br>
								<div class="input-group ">
									<span class="input-group-addon"> <i class="fas fa-envelope"></i> </span>
									<input type="tel" class="form-control" name="pincode" placeholder="Pincode" maxlength="6">
								</div><br>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fas fa-map-pin"></i> </span>
									<input type="text" class="form-control" name="mlogitude" placeholder="Map Longitude">
								</div><br>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fas fa-map-pin"></i> </span>
									<input type="text" class="form-control" name="mlatitude" placeholder="Map Latitude">
								</div>
								<br>
								<div class="form-group text-right">
									<a href="#contact-form" data-toggle="tab" class="btn btn-primary" name="sc">Save & Continue</a>
								
								</div>
								
								
							</form>
						</div>
						<div id="contact-form" class="tab-pane fade lb1">
							<h2 class="text-info">Contact Information</h2>
							<br>
							<form role="form" class="form-horizontal text-center">
								<div class="input-group ">
									<span class="input-group-addon"> <i class="fas fa-phone"></i> </span>
									<input type="text" class="form-control" name="ph" placeholder="Phone(XXXX-XXX-XXX)">
								</div><br>
								<div class="input-group ">
									<span class="input-group-addon"> <i class="">+91</i> </span>
									<input type="tel" class="form-control" name="ph" placeholder="Moblie Number(XXXX-XXX-XXX)" maxlength="10">
								</div>
									<br>
								<div class="input-group ">
									<span class="input-group-addon"> <i class="fas fa-envelope"></i> </span>
									<input type="text" class="form-control" name="ph" placeholder="Email">
								</div><br>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fas fa-globe"></i> </span>
									<input type="text" class="form-control" name="ph" placeholder="Website">
								</div><br>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fab fa-facebook"></i> </span>
									<input type="text" class="form-control" name="ph" placeholder="facebook id">
								</div><br>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fab fa-twitter"></i> </span>
									<input type="text" class="form-control" name="ph" placeholder="twitter id">
								</div><br>
								<div class="input-group ">
									<span class="input-group-addon"> <i class="fab fa-google-plus"></i> </span>
									<input type="text" class="form-control" name="ph" placeholder="google-plus id">
								</div><br>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fab fa-instagram"></i> </span>
									<input type="text" class="form-control" name="ph" placeholder="instagram id">
								</div><br>
								<a href="#images" data-toggle="tab" class="btn btn-primary">Save & Continue</a>
								
							</form>
						</div>
						<div id="images" class="tab-pane fade lb1">
							<h2>Business details</h2>
							<form class="form-inline" role="form" action="" method="post">
								<div class="input-group col-sm-12">
									<span class="input-group-addon">Category <i class="fas fa-arrow-circle-right"></i> </span>
									<select class="form-control">
										<option>Auto Mobile</option>
										<option>Banks</option>
										<option>Fitness</option>
										<option>Hotels</option>

										<option>Medicals</option>
										<option>Hospitals</option>
										<option>Doctors</option>
										<option>Education</option>

										<option>Event Managements</option>
										<option>Fashion</option>
										<option>Sport</option>
										<option>Courier</option>

									</select>
								</div><br><br>
								<div class="input-group col-sm-12">
									<span class="input-group-addon"> <i class="fas fa-user">&nbsp;Profile picture</i> </span>
									<input type="file" class="form-control" name="ph" placeholder="profile picture" title="profile picture">
								</div><br><br>
								<div class="input-group col-sm-12">
									<span class="input-group-addon"> <i class="fas fa-image">&nbsp;Cover Picture	</i> </span>
									<input type="file" class="form-control" name="ph" placeholder="cover picture" title="cover picture">
								</div><br><br>
								<div class="input-group col-sm-12">
									<span class="input-group-addon"> <i class="fas fa-envelope"></i> </span>
									<textarea cols="2" rows="3" class="form-control" placeholder="Description"></textarea>
								</div><br><br>
								<div class="input-group col-sm-12">
									<span class="input-group-addon"> <i class="fas fa-globe"></i> </span>
									<textarea cols="2" rows="3" class="form-control" placeholder="facility"></textarea>

								</div><br><br>
								<div class="input-group col-sm-12">
									<span class="input-group-addon"> <i class="fas fa-user-circle"></i> </span>
									<input type="text" class="form-control" name="nm" placeholder="open hours">
								</div><br><br>
								<input type="submit" class="btn btn-primary btn-lg">
							</form>
						</div>
						
					</div>
				</div>	
			</div>
		</section>
	</body>
</html>