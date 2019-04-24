<html>
	<head>
		<title>Dashboard</title>
		<link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../style/bootstrap/js/jquery.min.js"></script>
		<script src="../style/bootstrap/js/bootstrap.min.js"></script>
		<link href="../style/fontawesome-5/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
		<link href="../style/dashboard-style.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta charset="UTF-8">
	</head>
	<body>
			<nav class="navbar">
			  <div class="container-fluid">
				<div class="navbar-header site-name ">
					<a class="navbar-brand" href="#">
						<span class="fp">City-</span>
						<span class="lp">Bazzar</span>
					</a>
				</div>
				<form class="navbar-form navbar-left" action="">
				  <div class="form-group">
					<input type="text" class="form-control" placeholder="Search...">
				  </div>
				  	<button type="submit" class="btn btn-default">Search</button>
					<button type="button" class="btn btn-danger">Logout</button>
				</form>
			  </div>
			</nav>
		<div class="container-fluid">
			<div class="row sbox">
				<div class="col-sm-2 menu-list">
					<ul class="nav list-unstyled">
						<li>
							<a href="dashboard.php" ><span class="fas fa-home"></span>&nbsp;&nbsp;&nbsp;Dashboard</a>
						</li>
						<li>
							<a href="#l1" data-toggle="collapse">
								<span class="fas fa-bars"></span>&nbsp;&nbsp;&nbsp;Categories
							</a>
							<ul class="nav list-unstyled collapse text-center" id="l1">
								<li>
									<a href="addcatgry.php" class="">
										<span class="fas fa-long-arrow-alt-right">&nbsp;&nbsp;</span>Add Category
									</a>
								</li>
								<li>
									<a href="showcat.php">
										<span class="fas fa-long-arrow-alt-right">&nbsp;&nbsp;</span>Show Category
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#l2" class="" data-toggle="collapse"><span class="fas fa-bars">
								</span>&nbsp;&nbsp;&nbsp;Business Listing
							</a>
							<ul class="nav list-unstyled collapse text-center" id="l2">
								<li>
									<a href="blist.php" class="">
										<span class="fas fa-long-arrow-alt-right">&nbsp;&nbsp;</span>New Business Listing 
									</a>
								</li>
								<li>
									<a href="">
										<span class="fas fa-long-arrow-alt-right">&nbsp;&nbsp;</span>Show Business Listing
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="listqry.php" class="" >
								<span class="fas fa-bars"></span>&nbsp;&nbsp;&nbsp;Inquery List
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fas fa-bars"></span>&nbsp;&nbsp;&nbsp;Freelisting Request
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-10 ">
					<h1>New Listing</h1>
					<form role="form" class="" method="post" action="">
						
					  	<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-user"></i> </span>
							<input type="text" class="form-control" name="nm" placeholder="Business Name">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-user-circle"></i> </span>
							<input type="text" class="form-control" name="nm" placeholder="Username">
						</div><br>
						
						<div class="input-group col-sm-5">
							<span class="input-group-addon"> <i class="fas fa-phone"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="Phone(XXXX-XXX-XXX)">
						</div><br>
						<div class="input-group  col-sm-5">
							<span class="input-group-addon"> <i class="fas fa-phone"></i> </span>
							<input type="tel" class="form-control" name="ph" placeholder="Moblie Number(+91 XXXX-XXX-XXX)" maxlength="10">
						</div>
							<br>
						<div class="input-group col-sm-5">
							<span class="input-group-addon"> <i class="fas fa-envelope"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="Email">
						</div><br>
						<div class="input-group col-sm-5">
							<span class="input-group-addon"> <i class="fas fa-globe"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="Website">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-address-card"></i> </span>
							<textarea cols="2" rows="3" class="form-control" placeholder="Address"></textarea>
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-university"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="City">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-university "></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="State">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-envelope"></i> </span>
							<input type="tel" class="form-control" name="ph" placeholder="Pincode" maxlength="6">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-map-pin"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="Map Longitude">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-map-pin"></i> </span>
							<input type="text" class="form-control" name="nm" placeholder="Map Latitude">
						</div><br>
						<div class="input-group col-sm-10">
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
						</div>
							<br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-user"></i> </span>
							<input type="file" class="form-control" name="ph" placeholder="profile picture" title="profile picture">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-image"></i> </span>
							<input type="file" class="form-control" name="ph" placeholder="cover picture" title="cover picture">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-envelope"></i> </span>
							<textarea cols="2" rows="3" class="form-control" placeholder="Description"></textarea>
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-globe"></i> </span>
							<textarea cols="2" rows="3" class="form-control" placeholder="facility"></textarea>
						
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-user-circle"></i> </span>
							<input type="text" class="form-control" name="nm" placeholder="open hours">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fab fa-facebook"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="facebook id">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fab fa-twitter"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="twitter id">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fab fa-google-plus"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="google-plus id">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fab fa-instagram"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="instagram id">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-eye"></i> </span>
							<input type="text" class="form-control" name="nm" placeholder="visibility">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-thumbtack"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="status">
						</div><br>
						<div class="input-group col-sm-10">
							<span class="input-group-addon"> <i class="fas fa-id-badge"></i> </span>
							<input type="text" class="form-control" name="ph" placeholder="cartgory id">
						</div><br>
						

					</form>
											<br>
						<br>
				</div>
			</div>
		</div>
	</body>
</html>
