<?php require_once 'core/init.php' ?>

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
				<div class="d-flex gap-2">
					<a href="login.php" class="btn btn-outline-light">Log In</a>
					<a href="register.php" class="btn btn-warning">Register</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="container-fluid p-0 mb-5">
		<div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/banner6.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="...">
					<div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-4 rounded">
						<h2 class="text-white fw-bold">ODARA</h2>
						<p class="text-light">Timeless elegance through premium fragrances.</p>
					</div>
				</div>
			</div>
		</div>
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
			<div>&copy; 2025 ODARA. Premium Fragrances.</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>