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
							<li><a href="#about">About Us</a></li>
							<li><a href="#contactus">Contact US</a>
							
							
							
							</li>
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
											<h2 class="modal-title text-primary">Free Listing</h2>
										</div>
										<div class="modal-body">
											<h3 class="text-info"><b>List Your Business Free</b></h3><br>
											
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
			<div class="row ">
				<div class="col-sm-12 col-xm-12 col-lg-12 col-md-12">
					<div class="carousel slide adbtn" id="mycarousel" data-ride="carousel">
						
						<ol class="carousel-indicators ">
							<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
							<li data-target="#mycarousel" data-slide-to="1" ></li>
							<li data-target="#mycarousel" data-slide-to="2" ></li>
							<li data-target="#mycarousel" data-slide-to="3" ></li>
						</ol> 
						
						<div class="carousel-inner slide-images">
							<div class="item active"> 
								<img src="../images/City-Bazaar.png" class="img-responsive">
							</div>
							<div class="item ">
								<img src="../images/City-Bazaar.png" class="img-responsive">
							</div>
							<div class="item">
								<img src="../images/City-Bazaar.png" class="img-responsive" >
							</div>
							<div class="item"> 
								<img src="../images/City-Bazaar.png" class="img-responsive">
							</div>
						</div>
						
					</div>		
				</div>
			</div>
		</header>
		<section>
			<div class="container-fluid">
				<hr class="hl">
				<div class="row fields">
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Auto Mobiles</h4>
								<i class="fas fa-car fa-3x"></i>
							</div>
						</a>
					</div>
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Banks</h4>
								<i class="fas fa-money-bill-alt fa-3x"></i>
							</div>
						</a>
					</div>
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Fitness</h4>
								<i class="fas fa-heartbeat fa-3x"></i>
							</div>
						</a>
					</div>
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Hotels</h4>
								<i class="fas fa-home fa-3x"></i>
							</div>
						</a>
					</div>
				</div>	
				
				<div class="row fields line1">
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Medicals</h4>
								<i class="fas fa-medkit fa-3x"></i>
							</div>
						</a>
					</div>
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Hospitals</h4>
								<i class="fas fa-hospital fa-3x"></i>
							</div>
						</a>
					</div>
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Doctors</h4>
								<i class="fas fa-user-md fa-3x"></i>
							</div>
						</a>
					</div>
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Education</h4>
								<i class="fas fa-book fa-3x"></i>
							</div>
						</a>
					</div>
				</div>	
				
				<div class="row fields line1">
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Event Management</h4>
								<i class="fas fa-calendar-alt fa-3x"></i>
							</div>
						</a>
					</div>
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Fashion</h4>
								<i class="fas fa-child fa-3x"></i>
							</div>
						</a>
					</div>
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Sport</h4>
								<i class="fas fa-football-ball fa-3x"></i>
							</div>
						</a>
					</div>
					<div class="col-sm-3 text-center f1">
						<a href="list.php">
							<div class="inbox">
								<h4>Courier</h4>
								<i class="fas fa-bus fa-3x"></i>
							</div>
						</a>
					</div>
				</div>	
			</div>
			<hr class="hl">
		</section>
		<footer class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="footer-copyright lead py-3 text-center">
        				© 2018 Copyright:
        				<a href="">City-bazzar.com</a>
					</div>
					</div>
					<div class="col-sm-6 footer-icon ">
						<ul class="nav navbar-nav">
							<li><a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a></li>
							<li><a href="https://www.instagram.com/?hl=en"><span class="fab fa-twitter"></span></a></li>
							<li><a href="https://twitter.com/login?lang=en"><span class="fab fa-instagram"></span></a></li>
						</ul>
            		</div>
				</div>
		</footer>
	</body>
</html>