<?php
session_start();
include_once 'core/init.php';

$sql_category = "SELECT * FROM categories";
$result_category = mysqli_query($conn, $sql_category);

if (isset($_GET['category_name'])) {
    $category_name = $_GET['category_name'];
    // Fixed: Using 'categorie_name' to match your database screenshot
    $sql_product_category = "SELECT * FROM product WHERE categorie_name = '$category_name' ";
    $result_product_category = mysqli_query($conn, $sql_product_category);
} else {
    $sql_product_category = "SELECT * FROM product";
    $result_product_category = mysqli_query($conn, $sql_product_category);
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
                        <a href="logout.php" class="btn btn-sm btn-danger">Log Out</a>
                        <a href="user_orders.php" class="btn btn-outline-warning"><i class="fa-solid fa-cart-shopping fa-xl" style="color:rgb(162, 128, 7);"></i></a>
                        <a href="user_profile.php" class="btn btn-outline-warning"><i class="fa-solid fa-user fa-xl" style="color: #FFD43B;"></i></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>

    <div class="bg-white py-3 border-bottom shadow-sm">
        <div class="container d-flex justify-content-center gap-3">
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle px-4 rounded-pill" type="button" data-bs-toggle="dropdown">
                    CATEGORY
                </button>
                <ul class="dropdown-menu shadow rounded-3">
                    <?php while ($row_category = mysqli_fetch_assoc($result_category)) { ?>
                        <li>
                            <a class="dropdown-item" href="product.php?category_name=<?php echo urlencode($row_category['name']); ?>">
                                <?php echo htmlspecialchars($row_category['name']); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown">PRICE</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Min - Max</a></li>
                    <li><a class="dropdown-item" href="#">Max - Min</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4">
            <?php while ($row_product_category = mysqli_fetch_assoc($result_product_category)) { ?>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card position-relative">
                        <img src="images/<?php echo $row_product_category['image']; ?>" class="img-fluid" alt="Product">
                        <div class="position-absolute top-0 end-0 p-2">
                            <span class="badge bg-danger">5% OFF</span>
                        </div>
                        <div class="product-body text-center mt-3">
                            <h5 class="fw-bold"><?php echo $row_product_category['name']; ?></h5>
                            <p>Stock - <?php echo $row_product_category['stock_quantity']; ?> items</p>
                            <p>
                                <span class="list-price text-muted"><?php echo $row_product_category['price']; ?></span>
                                <span class="price-tag fw-bold"><?php echo $row_product_category['price']; ?></span>
                            </p>
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal_<?php echo $row_product_category['id']; ?>">
                                    Details
                                </button>
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="detailsModal_<?php echo $row_product_category['id']; ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?php echo $row_product_category['name']; ?> Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="images/<?php echo $row_product_category['image']; ?>" style="width:200px">
                                <p><?php echo $row_product_category['description']; ?></p>
                                <p>Stock - <?php echo $row_product_category['stock_quantity']; ?> items</p>
                                <h4 class="text-success">Rs.<?php echo $row_product_category['price']; ?></h4>

                                <?php if (isset($_SESSION['user_id'])) { ?>
                                    <form action="single_order.php" method="get" class="mt-3">
                                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                        <input type="hidden" name="product_id" value="<?php echo $row_product_category['id']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $row_product_category['price']; ?>">

                                        <label class="form-label fw-bold">Quantity</label>
                                        <input type="number" name="product_quantity" class="form-control text-center mb-3"
                                            value="1" min="1" max="<?php echo $row_product_category['stock_quantity']; ?>" required>

                                        <button type="submit" class="btn btn-warning w-100">Add To Cart</button>
                                    </form>
                                <?php } else { ?>
                                    <a href="register.php" class="btn btn-warning mt-3">Add To Cart</a>
                                <?php } ?>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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