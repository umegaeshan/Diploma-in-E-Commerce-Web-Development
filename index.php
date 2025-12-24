<?php

session_start();
require_once 'core/init.php' ?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | ODARA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>
</head>

<body>

	<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
		<div class="container">
			<a class="navbar-brand" href="index.php">ODARA</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
				</ul>
				<?php if (!isset($_SESSION['user_id'])) { ?>
					<div class="d-flex gap-2">
						<a href="login.php" class="btn btn-outline-light">Log In</a>
						<a href="register.php" class="btn btn-warning">Register</a>
					</div>
				<?php } else { ?>
					<div class="d-flex gap-2">
						<a href="logout.php" class="btn btn-sm btn-danger">Log Out</a>
						<a href="user_orders.php" class="btn btn-outline-warning"><i class="fa-solid fa-cart-shopping fa-xl" style="color:rgb(162, 128, 7);"></i></a>
						<a href="user_profile.php" class="btn btn-outline-warning"><i class="fa-solid fa-user fa-xl" style="color: #FFD43B;"></i></a>
					</div>
				<?php } ?>


			</div>
		</div>
	</nav>

	<!-- Scroling Images -->

	<div id="carouselExampleCaptions" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images\banner3.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>First slide label</h5>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images\banner5.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5>
					<p>Some representative placeholder content for the second slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images\monochrome-beauty-product-skincare.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>



	<div class="container main-container">
		<h2 class="text-center mb-5 fw-bold text-dark">Featured Categories</h2>

		<div class="row g-4">
			<div class="col-md-4">
				<div class="product-card text-center">
					<img src="images/Fragrance-Notes-1024x683.jpg" alt="Men">
					<div class="product-body">
						<h3>MEN</h3>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-card text-center">
					<img src="images/women sents.avif" alt="Women">
					<div class="product-body">
						<h3>WOMEN</h3>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-card text-center">
					<img src="images/babies sents.jpeg" alt="Babies">
					<div class="product-body">
						<h3>BABIES</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="text-center mt-5">
			<a href="product.php" class="btn btn-dark btn-lg px-5">View All Products</a>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<center>
				<div>&copy; 2025 ODARA. Premium Fragrances.</div>
			</center>

		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>