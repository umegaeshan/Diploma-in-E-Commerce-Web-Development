<?php require_once 'core/init.php' ?>
<?php
session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == "admin") {
    } else {
        echo "Go for user dashbord ";
        exit(); // Added exit to stop loading admin HTML for users
    }
} else {
    header("Location:index.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | ODARA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">ODARA <span class="badge bg-light text-dark" style="font-size: 10px; vertical-align: top;">ADMIN</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="admin_dashbord.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="add_product.php">Add Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="view_products.php">View Inventory</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_orders.php">View Orders</a></li>

                </ul>
                <div class="d-flex gap-2">
                    <a href="logout.php" class="btn btn-sm btn-danger">Log Out</a>
                    <a href="admin_profile.php" class="btn btn-outline-warning"><i class="fa-solid fa-user fa-xl" style="color: #FFD43B;"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <center>
        <div class="container main-container">
            <div class="row ">
                <div class="col-12">
                    <div class="content-card">
                        <h2 class="fw-bold">Welcome Admin</h2>
                        <p class="text-muted">Manage your store efficiently.</p>
                    </div>
                </div>
            </div>
    </center>

    <div class="row g-4 m-5">
        <div class="col-md-6">
            <div class="content-card text-center h-100">
                <i class="fa-solid fa-plus-circle fa-3x mb-3 text-success"></i>
                <h3>Add Product</h3>
                <p>Insert new items into your catalog.</p>
                <a href="add_product.php" class="btn btn-success">Go to Add Product</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="content-card text-center h-100">
                <i class="fa-solid fa-home fa-3x mb-3 text-primary"></i>
                <h3>View Site</h3>
                <p>Visit the main homepage.</p>
                <a href="index.php" class="btn btn-primary">Go Home</a>
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