<?php
require_once 'core/init.php';
session_start();

if (isset($_SESSION['user_id'])) {

    // 1. Check if user is ADMIN
    if ($_SESSION['user_role'] == "admin") {

        // 2. SQL: Select ALL orders from 'single_order' + product info
        //    Added 'ord.user_id' to the list
        $sql = "SELECT 
                    ord.id AS order_id, 
                    ord.user_id,
                    ord.product_quantity,
                    ord.product_id,
                    ord.total_amount,
                    prod.image,
                    prod.description,
                    prod.price,
                    prod.name AS product_name
                FROM single_order ord
                JOIN product prod ON ord.product_id = prod.id
                ORDER BY ord.id DESC";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "<h1> Database Error: " . mysqli_error($conn) . "</h1>";
            exit();
        }
    } else {
        // If not admin, redirect
        header("Location: user_profile.php");
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
    <title>Manage Orders | ODARA Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: sans-serif;
        }

        .main-container {
            padding: 40px 0;
            min-height: 80vh;
        }

        .table-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 20px;
        }

        .product-thumb {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .table thead {
            background-color: #212529;
            color: white;
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
                <ul class="navbar-nav me-auto ms-4">
                    <li class="nav-item"><a class="nav-link" href="admin_dashbord.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="add_product.php">Add Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_inventory.php">View Inventory</a></li>
                    <li class="nav-item"><a class="nav-link active" href="admin_orders.php">View Orders</a></li>
                </ul>

                <div class="d-flex gap-2">
                    <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="table-card">
                    <h3 class="mb-4 text-dark border-bottom pb-3">Customer Orders</h3>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Info</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total (Rs)</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($result) == 0) {
                                    echo '<tr><td colspan="7" class="text-center text-danger fw-bold">No orders found</td></tr>';
                                }

                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td class="fw-bold text-primary">#<?php echo $row['order_id']; ?></td>

                                        <td class="fw-bold text-dark">
                                            <span class="badge bg-info text-dark">User #<?php echo $row['user_id']; ?></span>
                                        </td>

                                        <td><img src="images/<?php echo $row['image']; ?>" alt="Product" class="product-thumb"></td>

                                        <td>
                                            <strong>ID: <?php echo $row['product_id']; ?></strong><br>
                                            <small class="text-muted"><?php echo substr($row['description'], 0, 40) . '...'; ?></small>
                                        </td>

                                        <td class="fw-bold text-center"><?php echo $row['product_quantity']; ?></td>

                                        <td class="fw-bold text-success"><?php echo number_format($row['total_amount'], 2); ?></td>

                                        <td>
                                            <a href="admin_delete_order.php?id=<?php echo $row['order_id']; ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this customer order?');">
                                                <i class="fa-solid fa-trash"></i> Delete
                                            </a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>