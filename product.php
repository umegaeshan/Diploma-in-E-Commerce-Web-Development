<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products | ODARA</title>
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="product.php">Product</a></li>
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

    <div class="bg-white py-3 border-bottom shadow-sm">
        <div class="container d-flex gap-3 justify-content-center">
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">CATEGORY</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Men</a></li>
                    <li><a class="dropdown-item" href="#">Women</a></li>
                    <li><a class="dropdown-item" href="#">Babies</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">PRICE</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Min - Max</a></li>
                    <li><a class="dropdown-item" href="#">Max - Min</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container main-container">
        <div class="row g-4">

            <div class="col-md-4 col-sm-6">
                <div class="product-card">
                    <img src="images/03 freedom.webp" alt="Product">
                    <div class="position-absolute top-0 end-0 p-2">
                        <span class="badge bg-danger">5% OFF</span>
                    </div>
                    <div class="product-body text-center">
                        <h5 class="fw-bold mb-1">O3 FREEDOM</h5>
                        <p class="mb-2">
                            <span class="list-price">$23.21</span>
                            <span class="price-tag">$225.00</span>
                        </p>
                        <div class="d-flex justify-content-center gap-2">
                            <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal_1">Details</button>
                            <button class="btn btn-outline-danger btn-sm"><i class="fa-regular fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="detailsModal_1" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">O3 Freedom Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="images/03 freedom.webp" style="width: 200px;" class="mb-3">
                            <p>Vibrant, fruity, and full of energy.</p>
                            <h4 class="text-success">Rs 2,250.00</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="register.php" class="btn btn-warning">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>About ODARA</h5>
                    <p class="footer-text">Premium online cake ordering shop. We deliver happiness with every slice. Quality ingredients and best service guaranteed.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled footer-text">
                        <li><a href="#" class="text-decoration-none text-muted">Dashboard</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">New Orders</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Stock Management</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact</h5>
                    <p class="footer-text">
                        <i class="fa-solid fa-envelope me-2"></i> support@odara.com<br>
                        <i class="fa-solid fa-phone me-2"></i> +94 77 123 4567<br>
                        <i class="fa-solid fa-location-dot me-2"></i> Colombo, Sri Lanka
                    </p>
                </div>
            </div>
            <div class="text-center pt-3 border-top border-secondary">
                <small>&copy; 2025 ODARA. All Rights Reserved.</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>