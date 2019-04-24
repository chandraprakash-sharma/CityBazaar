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
												<div class="form-group">
														<label for="cn" class="control-label col-sm-3">Company Name:</label>
													<div class="col-sm-6">
														<input type="text" id="cn" name="cn" class="form-control" required>
													</div>
													
												</div>
												<div class="form-group">
														<label for="city" class="control-label col-sm-3">City:</label>
													<div class="col-sm-6">
														<input type="text" id="city" name="city" class="form-control">
													</div>
												</div>
												<div class="form-group">
														<label for="fn" class="control-label col-sm-3">Firstname:</label>
													<div class="col-sm-6">
														<input type="text" id="fn" name="fn" class="form-control">
													</div>
												</div>
												<div class="form-group">
														<label for="ln" class="control-label col-sm-3">Lastname:</label>
													<div class="col-sm-6">
														<input type="text" id="ln" name="ln" class="form-control">
													</div>
												</div>
												<div class="form-group">
														<label class="control-label col-sm-3" for="contact">Contact No:</label>
													<div class="col-sm-6">
														<input type="tel" id="contact" name="contact" class="form-control">
													</div>
												</div>
												<a href="listing-form.html" class="btn btn-info">
														Submit
													</a>	
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
				<div class="col-sm-4"></div>
				<div class="col-sm-4 text-center">
					<h2 class="text-center text-primary">Admin Login</h2>
					<br><br>
					<form class="form-horizontal" role="form" action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-user"></i></span>
							<input type="text" class="form-control" name="un" required placeholder="username">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-key"></i></span>
							<input type="password" class="form-control" name="upass" required placeholder="password">
						</div><br><br>
						<input type="submit" name="sub" class="btn btn-primary btn-md" value="Login" >
						&nbsp;
						&nbsp;
						&nbsp;
						<input type="reset" class="btn btn-danger btn-md">
					</form>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</section>
		<footer></footer>
	</body>
</html>