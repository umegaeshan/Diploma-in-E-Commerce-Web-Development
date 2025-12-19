<?php
session_start();
include_once 'core/init.php';

// check login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = (int) $_SESSION['user_id'];

// get user data
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

// error handling
if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 0) {
    die("User not found");
}

$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-light">

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
                        <a href="logout_user.php" class="btn btn-sm btn-danger">Log Out</a>
                        <a href="user_orders.php" class="btn btn-outline-warning"><i class="fa-solid fa-cart-shopping fa-xl" style="color:rgb(162, 128, 7);"></i></a>
                        <a href="user_profile.php" class="btn btn-outline-warning active"><i class="fa-solid fa-user fa-xl" style="color:rgb(133, 105, 5);"></i></a>
                    </div>
                <?php } ?>


            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center min-vh-20">

        <div class="card border-0 shadow-lg rounded-4 m-5" style="max-width: 420px; width: 100%;">

            <div class="card-body text-center p-4">

                <!-- User Icon -->
                <div class="mb-3">
                    <i class="fa-solid fa-user-circle fa-5x text-primary"></i>
                </div>

                <!-- Username -->
                <h4 class="fw-bold mb-1">
                    <?= htmlspecialchars($user['username']); ?>
                </h4>

                <!-- Email -->
                <p class="text-muted mb-3">
                    <?= htmlspecialchars($user['email']); ?>
                </p>

                <!-- Role -->
                <span class="badge bg-success px-3 py-2">
                    <h4> <?= ucfirst($user['role']); ?></h4>

                </span>

                <hr>

                <!-- Action Buttons -->
                <div class="d-grid gap-2 mt-4">
                    <a href="edit_profile.php" class="btn btn-outline-primary">
                        <i class="fa-solid fa-pen-to-square me-1"></i>
                        Edit Profile
                    </a>

                    <a href="logout.php" class="btn btn-outline-danger">
                        <i class="fa-solid fa-right-from-bracket me-1"></i>
                        Logout
                    </a>
                </div>

            </div>
        </div>

    </div>

    <footer class="footer m-5">
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


</body>

</html>