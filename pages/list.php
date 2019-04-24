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
											
											<form role="form" class="form-horizontal" method="post" action="listing-form.php">
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
		
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-2 mynav">
						<h2 class=" text-danger text-uppercase">Categories</h2>
						<ul class="nav nav-tabs nav-stacked" id="mytab"> 
						
							<li><a href="#" class="" name="automobile">Auto Mobiles</a></li>
							<li><a href="#" class="" name="bank">Bank</a></li>
							<li><a href="#" class="" name="fitness">Fitness</a></li>
							<li><a href="#" class="" name="">Hotels</a></li>
							
							<li><a href="#" class="" name="medical">Medicals</a></li>
							<li><a href="#" class="" name="hospital">Hospitals</a></li>
							<li><a href="#" class="" name="doctor">Doctors</a></li>
							<li><a href="#" class="" name="education">Education</a></li>
							
							<li><a href="#" class="" name="event">Event Management</a></li>
							<li><a href="#" class="" name="fashion">Fashion</a></li>
							<li><a href="#" class="" name="sport">Sport</a></li>
							<li><a href="#" class="" name="courier">Courier</a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container-fluid footer-box">
				<div class="row">
					<div class="col-sm-12">
						
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>





















