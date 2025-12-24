<?php
session_start();
include_once 'core/init.php';

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | ODARA</title>
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
                    <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact Us</a></li>
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

    <div class="container main-container">

        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Get in Touch</h2>
            <p class="text-muted">Have questions about our fragrances? We are here to help.</p>
        </div>

        <div class="row g-5">

            <div class="col-md-5">
                <div class="h-100 d-flex flex-column gap-4">

                    <div class="d-flex align-items-start gap-3">
                        <div class="bg-white p-3 rounded-circle shadow-sm text-primary">
                            <i class="fa-solid fa-location-dot fa-xl"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Visit Us</h5>
                            <p class="text-muted mb-0">123 Lotus Road,<br>Colombo 07, Sri Lanka</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="bg-white p-3 rounded-circle shadow-sm text-primary">
                            <i class="fa-solid fa-phone fa-xl"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Call Us</h5>
                            <p class="text-muted mb-0">+94 77 123 4567<br>+94 11 234 5678</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="bg-white p-3 rounded-circle shadow-sm text-primary">
                            <i class="fa-solid fa-envelope fa-xl"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Email Us</h5>
                            <p class="text-muted mb-0">support@odara.com<br>sales@odara.com</p>
                        </div>
                    </div>

                    <div class="mt-auto">
                        <img src="images/banner1.jpg" alt="Map Location" class="img-fluid rounded-4 shadow-sm" style="height: 200px; width: 100%; object-fit: cover; opacity: 0.8;">
                    </div>

                </div>
            </div>

            <div class="col-md-7">
                <div class="content-card">
                    <h4 class="mb-4 fw-bold">Send us a Message</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="John Doe">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Order Inquiry">
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="How can we help you?"></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark btn-lg">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>About ODARA</h5>
                    <p class="footer-text">Premium online fragrance shop. We deliver happiness with every scent. Quality ingredients and best service guaranteed.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled footer-text">
                        <li><a href="index.php" class="text-decoration-none text-muted">Home</a></li>
                        <li><a href="product.php" class="text-decoration-none text-muted">Shop Now</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Privacy Policy</a></li>
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