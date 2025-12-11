<?php require_once 'core/init.php' ?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>
</head>

<body>

	<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">ODARA</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav me-auto fs-4">
					<li class="nav-item">
						<a class="nav-link active ms-5 me-5" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ms-3 me-5" href="product.php">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ms-3 me-5" href="about.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ms-3 me-5" href="contact.php">Contact Us</a>
					</li>
				</ul>
				<form class="d-flex me-5" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
					<button type="button" class="btn btn-outline-info">Search</button>
				</form>
				<div>
					<a href="login.php" class="btn btn-info" role="button">Log In</a>
					<a href="register.php" class="btn btn-outline-warning">Register</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="image_slider">
		<div id="carouselExampleDark" class="carousel carousel-dark slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="10000">
					<img src="images/banner6.jpg" class="d-block" alt="...">
					<div class="carousel-caption d-none d-md-block p-5">
						<h2 style="color:white;"> ODARA</h2>
						<p style=" font-size:25px; color:green">Brings you a world of timeless elegance through premium fragrances crafted with passion and purity.</p>
					</div>
				</div>
				<div class="carousel-item" data-bs-interval="2000">
					<img src="images/banner1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/banner2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
			</div>
			<div class="slider_buttons">
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>

	<div class="more-button">
		<a href="#feature-products-section" role="button" class="btn btn-outline-info fw-bold fs-5">Show More</a>
	</div>

	<section id="feature-products-section">
		<div class="feature-products">
			<h1 class="feature-product-title">Feature Products</h1>

			<div class="odora-grid">
				<div class="item1">
					<img src="images/Fragrance-Notes-1024x683.jpg" width="375px" height="375px">MEN
				</div>
				<div class="item2">
					<img src="images/women sents.avif" width="375px" height="375px">WOMEN
				</div>
				<div class="item3">
					<img src="images/babies sents.jpeg" width="375px" height="375px">BABIES
				</div>
			</div>
		</div>
	</section>

	<footer class="footer">
		<div class="container">
			<div class="A">Lorem ipsum dolor sit amet consectetur.</div>
			<div class="A">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta minima quas, ut cum exercitationem commodi! Nobis ratione perferendis inventore quam.</div>
			<div class="A">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, voluptatibus quisquam nemo facilis harum vel!</div>
			<div class="A">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nisi.</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>