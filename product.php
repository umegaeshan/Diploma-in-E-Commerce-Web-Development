<?php
session_start();
include_once 'core/init.php';

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
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
                    <a href="logout_user.php" class="btn btn-danger btn-sm">Log Out</a>
                <?php } ?>
            </div>
        </div>
    </nav>

    <!-- FILTER BAR -->
    <div class="bg-white py-3 border-bottom shadow-sm">
        <div class="container d-flex justify-content-center gap-3">
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown">CATEGORY</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Men</a></li>
                    <li><a class="dropdown-item" href="#">Women</a></li>
                    <li><a class="dropdown-item" href="#">Babies</a></li>
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

    <!-- PRODUCTS -->
    <div class="container my-5">
        <div class="row g-4">

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-4 col-sm-6">
                    <div class="product-card position-relative">

                        <img src="images/<?php echo $row['image']; ?>" class="img-fluid" alt="Product">

                        <div class="position-absolute top-0 end-0 p-2">
                            <span class="badge bg-danger">5% OFF</span>
                        </div>

                        <div class="product-body text-center mt-3">
                            <h5 class="fw-bold"><?php echo $row['name']; ?></h5>

                            <p>
                                <span class="list-price text-muted"><?php echo $row['price']; ?></span>
                                <span class="price-tag fw-bold"><?php echo $row['price']; ?></span>
                            </p>

                            <div class="d-flex justify-content-center gap-2">
                                <!-- FIXED DETAILS BUTTON -->
                                <button class="btn btn-dark btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#detailsModal_<?php echo $row['id']; ?>">
                                    Details
                                </button>

                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL -->
                <div class="modal fade" id="detailsModal_<?php echo $row['id']; ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title"><?php echo $row['name']; ?> Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body text-center">
                                <img src="images/<?php echo $row['image']; ?>" class="mb-3" style="width:200px">
                                <p><?php echo $row['description']; ?></p>
                                <h4 class="text-success"><?php echo $row['price']; ?></h4>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="register.php" class="btn btn-warning">Add To Cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer bg-dark text-light py-4">
        <div class="container text-center">
            <small>&copy; 2025 ODARA. All Rights Reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>