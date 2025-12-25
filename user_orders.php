<?php

require_once 'core/init.php';

session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == "user") {

        $user_id = (int) $_SESSION['user_id'];

        $sql = "SELECT 
                    ord.id AS order_id, 
                    ord.product_quantity,
                    ord.product_id,
                    ord.total_amount,
                    prod.image,
                    prod.description,
                    prod.price
                FROM single_order ord
                JOIN product prod ON ord.product_id = prod.id
                WHERE ord.user_id = $user_id
                ORDER BY ord.id DESC";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "<h1> Database Error: " . mysqli_error($conn) . "</h1>";
            exit();
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

    <style>
        .product-thumb {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
    </style>
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
                    <li class="nav-item"><a class="nav-link " href="product.php">Product</a></li>
                </ul>
                <?php if (!isset($_SESSION['user_id'])) { ?>
                    <div class="d-flex gap-2">
                        <a href="login.php" class="btn btn-outline-light">Log In</a>
                        <a href="register.php" class="btn btn-warning">Register</a>
                    </div>
                <?php } else { ?>
                    <div class="d-flex gap-2">
                        <a href="logout.php" class="btn btn-sm btn-danger">Log Out</a>
                        <a href="user_orders.php" class="btn btn-outline-warning active"><i class="fa-solid fa-cart-shopping fa-xl" style="color:rgb(162, 128, 7);"></i></a>
                        <a href="user_profile.php" class="btn btn-outline-warning"><i class="fa-solid fa-user fa-xl" style="color: #FFD43B;"></i></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>

    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="table-card">
                    <h3 class="mb-4 text-dark border-bottom pb-3">My Orders</h3>

                    <?php if (isset($_GET['msg'])) { ?>
                        <div class="alert alert-success"><?php echo $_GET['msg']; ?></div>
                    <?php } ?>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product ID</th>
                                    <th scope="col" style="width: 30%;">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($result) == 0) {
                                    echo '<tr><td colspan="8" class="text-center text-danger fw-bold">No orders found</td></tr>';
                                }

                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td class="fw-bold text-primary">#<?php echo $row['order_id']; ?></td>
                                        <td><img src="images/<?php echo $row['image']; ?>" alt="Product" class="product-thumb"></td>
                                        <td><?php echo $row['product_id']; ?></td>
                                        <td><small class="text-muted"><?php echo substr($row['description'], 0, 60) . '...'; ?></small></td>
                                        <td>Rs. <?php echo number_format($row['price'], 2); ?></td>
                                        <td class="fw-bold text-center"><?php echo $row['product_quantity']; ?></td>
                                        <td class="fw-bold text-success">Rs. <?php echo number_format($row['total_amount'], 2); ?></td>

                                        <td>
                                            <a href="delete_product.php?id=<?php echo $row['order_id']; ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this order?');">
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