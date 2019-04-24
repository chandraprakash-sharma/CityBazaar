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
									<a href="#">
										<span class="fas fa-long-arrow-alt-right">&nbsp;&nbsp;</span>Show Category
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="blist.php" class=""><span class="fas fa-bars">
								</span>&nbsp;&nbsp;&nbsp;Business Listing
							</a>
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
				<div class="col-sm-3"></div>
				<div class="col-sm-4">
					<h2 class="text-center text-info text-uppercase">Categories</h2>
					<table class="table table-bordered table-striped" name="showcat">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Visibility</th>
							<th>Icon</th>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>