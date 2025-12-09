<?php require_once 'core/init.php' ?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bootstrap demo</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">

	<script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>

</head>

<body>

	<div class="loading-animation">
		<div class="loader"></div>
	</div>


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

	<div class="background-image">
		<img src="images/monochrome-beauty-product-skincare.jpg" class="img-fluid" alt="Odora">
	</div>

	<div class="more-button">
		<a href="#feature-products-section" role="button" class="btn btn-outline-info fw-bold fs-5">Show More</a>
	</div>


	<div class="home-para">
		<p>
			<span class="web-name"> Odora </span>brings you a world of timeless elegance<br> through premium fragrances crafted with passion and purity. <br>Discover scents that reflect your personality, elevate your presence,<br> and leave a memorable impression. At Odora, every fragrance is a storyunique,<br> luxurious, and made to inspire confidence in every moment.
		</p>
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


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>






</body>

</html>