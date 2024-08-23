
<?php

session_start();

if(!isset($_SESSION['auth'])){

    header("Location: login.php");
    $_SESSION['message'] = "You did not log in!";
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" href="style.css">




	<!-- My CSS -->
	

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<div class="title">
			<a href="index.html" class="brand">
				<span class="text">Admin Panel</span>
			</a>
		</div>
		
		<div class="list-group" style="margin-top: 50px;">

		<div class="btn-group">
			<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" >
				Categories
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Category Table</a></li>
				<li><a class="dropdown-item" href="#">Category Add</a></li>
				
			</ul>
		</div>

		<div class="btn-group">
			<button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" >
				Products
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Product Table</a></li>
				<li><a class="dropdown-item" href="#">Product Add</a></li>
			</ul>
		</div>

		</div>
		
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>

			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="index.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="index.php">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>