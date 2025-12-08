<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bootstrap demo</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

	<link rel="stylesheet" href="css\style.css">

	<script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous">
	</script>



</head>

<body>


	<!--  CREATE NAV BAR -->

	<nav class="navbar navbar-expand-lg bg-dark  ">
		<div class="container-fluid">

			<a class="navbar-brand" href="index.php">ODARA</a>
			<div class="collapse navbar-collapse">

				<ul class="navbar-nav me-auto  fs-4 ">
					<li class="nav-item">
						<a class="nav-link active ms-5  me-5" href="index.php">Home</a>
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

					<input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" />
					<button type="button" class="btn btn-outline-info">Search</button>

				</form>
				<div>
					<button type="button" class="btn btn-info">Log In</button>
					<button type="button" class="btn btn-outline-warning">Register</button>
				</div>
			</div>
		</div>
	</nav>

	<!-- ADD BACKGROUN IMAGE -->
	<div class="background-image w-70 h-70">
		<img src="images\monochrome-beauty-product-skincare.jpg " class="img-fluid " alt="Odora">
	</div>

	<center>
		<div class="more-button ">
			<button href="#feature-products-section" type="button" class="btn btn-outline-info fw-bold fs-5">Show More</button>
		</div>
	</center>

	<div class="home-para">
		<p>
			<span class="web-name"> Odora </span>brings you a world of timeless elegance<br> through premium fragrances crafted with passion and purity. <br>Discover scents that reflect your personality, elevate your presence,<br> and leave a memorable impression. At Odora, every fragrance is a storyunique,<br> luxurious, and made to inspire confidence in every moment.
		</p>
	</div>

	<!-- FEATURE PRODUCTS -->
	<section id="feature-products-section">
		<div class="feature-products">
			<h1 class="feature-product-title">Feature Products </h1>

			<div class="odora-grid">
				<div class="col item1">
					<img src="images\Fragrance-Notes-1024x683.jpg  " width="375px" height="375px">MEN
				</div>
				<div class="col item2">
					<img src="images\women sents.avif" width="375px" height="375px">WOMEN
				</div>
				<div class="col item3">
					<img src="images\babies sents.jpeg" width="375px" height="375px">BABIES
				</div>
			</div>


		</div>
	</section>































	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>

</html>