<?php

require_once 'core/init.php';

session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == "user") {

        $user_id = $_SESSION['user_id'];
        $sql =  "SELECT * FROM payments WHERE ";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "<h1> Error {$conn->error} </h1>";
        }
    } else {
        header("Location:index.php");
        exit();
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
    <title>Products | ODARA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">ODARA</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="product.php">Product</a></li>
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
                        <a href="user_profile.php" class="btn btn-outline-warning"><i class="fa-solid fa-user fa-xl" style="color: #FFD43B;"></i></a>

                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>



    <div class="container main-container">

        <!-- <?php if (isset($result) && !$result): ?>
            <div class="alert alert-danger shadow-sm">Error: <?php echo $conn->error; ?></div>
        <?php elseif (isset($result) && $_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <div class="alert alert-success shadow-sm">Action Completed Successfully!</div>
        <?php endif; ?> -->

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="table-card">
                    <h3 class="mb-4 text-dark border-bottom pb-3">My Orders</h3>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col" style="width: 30%;">Description</th>
                                    <th scope="col">Price (Rs)</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td class="fw-bold text-primary"><?php echo $row['name'] ?></td>

                                        <td>
                                            <small class="text-muted">
                                                <?php echo $row['description'] . '...'; ?>
                                            </small>
                                        </td>

                                        <td class="fw-bold"><?php echo $row['price'] ?></td>

                                        <td>
                                            <img src="images/<?php echo $row['image'] ?>" class="product-img" alt="Product">
                                        </td>

                                        <td>
                                            <span class="badge bg-secondary"><?php echo $row['categorie_name'] ?></span>
                                        </td>

                                        <td>
                                            <div class="action-btn-group">
                                                <a class="btn btn-primary btn-sm-custom" href="update_product.php?product_id=<?php echo $row['id']; ?>">
                                                    <i class="fa-solid fa-pen"></i> Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm-custom" href="delete_product.php?product_id=<?php echo $row['id']; ?>">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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