<?php
session_start();
include_once 'core/init.php';

if (isset($_SESSION['user_id'])) {
    if (isset($_GET['user_id'], $_GET['product_id'], $_GET['product_price'])) {
        $user_id = (int) $_GET['user_id'];
        $product_id = (int) $_GET['product_id'];
        $total_amount = (int) $_GET['product_price'];


        $sql = "INSERT INTO single_order (user_id, product_id, total_amount) VALUES('$user_id', '$product_id', ' $total_amount')";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "<h1> Error {$conn->error}</h1> ";
        } else {
            $order_id = mysqli_insert_id($conn);
            $payment_method = "cashon";
            $sql_payment = "INSERT INTO payments(order_id,user_id,total_amount,payment_method)VALUES('$order_id','$user_id','$total_amount ','$payment_method')";
            $result_payment = mysqli_query($conn, $sql_payment);

            if (!$result_payment) {
                echo "<h1> Error {$conn->error} </h1>";
            }

            $sql_update_stock = "UPDATE product 
                                 SET stock_quantity = stock_quantity - 1 
                                 WHERE id =  $product_id";

            $result_update_stock = mysqli_query($conn, $sql_update_stock);

            if (!$result_update_stock) {
                die("Error: " . mysqli_error($conn));
            }


            echo '
            <!-- SUCCESS MODAL -->
            <div class="modal fade show" style="display:block;" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                     <div class="modal-content text-center">

                        <div class="modal-header border-0">
                             <h5 class="modal-title w-100 text-success">Success</h5>
                        </div>

                        <div class="modal-body">
                            <p>Order added successfully!</p>
                        </div>

                        <div class="modal-footer border-0 justify-content-center">
                            <a href="user_orders.php" class="btn btn-success">OK</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- MODAL BACKDROP -->
            <div class="modal-backdrop fade show"></div> ';
        }
    }
} else {
    header:
    ("Location:index.php");
    exit();
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MY Oreders | ODARA</title>
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
                    <li class="nav-item"><a class="nav-link " href="about.php">About</a></li>
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
                        <a href="single_order.php" class="btn btn-outline-warning"><i class="fa-solid fa-cart-shopping fa-xl active" style="color:rgb(162, 128, 7);"></i></a>
                    </div>
                <?php } ?>

            </div>
        </div>
    </nav>



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

    <!-- Order success alert  -->
    <script>
        setTimeout(() => {
            const alert = document.getElementById('successAlert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                alert.style.display = 'none';
            }
        }, 2000); // 2000ms = 2 seconds
    </script>

</body>

</html>