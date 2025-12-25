<?php
require_once 'core/init.php';
session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == "admin") {

        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql);

        // Moved the success/error message inside the HTML body for better layout
    } else {
        echo "Go for user dashbord";
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
    <title>View Products | ODARA Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #f8f9fa;
            /* Soft gray background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar Styling */
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Main Container */
        .main-container {
            flex: 1;
            padding: 40px 0;
        }

        /* Card/Table Styling */
        .table-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 20px;
            overflow: hidden;
        }

        .table thead {
            background-color: #212529;
            color: white;
        }

        .table th {
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            padding: 15px;
            border: none;
        }

        .table td {
            vertical-align: middle;
            padding: 15px;
            border-bottom: 1px solid #eee;
            color: #555;
        }

        /* Image Styling */
        .product-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: transform 0.2s;
        }

        .product-img:hover {
            transform: scale(1.5);
        }

        /* Button Styling */
        .action-btn-group {
            display: flex;
            gap: 8px;
        }

        .btn-sm-custom {
            padding: 5px 10px;
            font-size: 0.8rem;
            border-radius: 6px;
        }

        /* Footer Styling */
        .footer {
            background-color: #212529;
            color: #adb5bd;
            padding: 40px 0 20px;
            margin-top: auto;
        }

        .footer h5 {
            color: #fff;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .footer-text {
            font-size: 0.9rem;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">ODARA <span class="badge bg-warning text-dark" style="font-size: 10px; vertical-align: top;">ADMIN</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="admin_dashbord.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="add_product.php">Add Products</a></li>
                    <li class="nav-item"><a class="nav-link active" href="view_order.php">View Inventory</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_orders.php">View Orders</a></li>
                </ul>

                <div class="d-flex align-items-center gap-2">
                    <form class="d-flex me-2" role="search">
                        <input class="form-control form-control-sm me-2" type="search" placeholder="Search..." aria-label="Search" />
                        <button class="btn btn-sm btn-outline-info" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
                    <a href="admin_profile.php" class="btn btn-outline-warning"><i class="fa-solid fa-user fa-xl" style="color: #FFD43B;"></i></a>
                </div>
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
                    <h3 class="mb-4 text-dark border-bottom pb-3">Product Inventory</h3>

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