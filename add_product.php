<?php
require_once 'core/init.php';
session_start();

$message = ""; // Variable to store alerts

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == "admin") {

        $sql1 = "SELECT * FROM categories";
        $result1 = mysqli_query($conn, $sql1);

        if (isset($_POST['submit'])) {
            $product_name = $_POST['product_name'];
            $discreption = $_POST['description'];
            $price = $_POST['price'];
            $stock_quantity = $_POST['stock_quantity'];
            $image = $_FILES['image']['name'];
            $temp_location = $_FILES['image']['tmp_name'];
            $upload_location = "images/";
            $categorie_id = $_POST['categorie_id'];

            // Get category name
            $getCat = mysqli_query($conn, "SELECT name FROM categories WHERE id = '$categorie_id'");
            $rowCat = mysqli_fetch_assoc($getCat);
            $categorie_name = $rowCat['name'];

            $sql = "INSERT INTO product (name,description,price,stock_quantity,image,categorie_id,categorie_name)
                    VALUES ('$product_name','$discreption','$price','$stock_quantity','$image','$categorie_id','$categorie_name')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                $message = "<div class='alert alert-danger'>Error !! {$conn->error}</div>";
            } else {
                move_uploaded_file($temp_location, $upload_location . $image);
                $message = "<div class='alert alert-success'>Product Added Successfully !!</div>";
            }
        }
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
    <title>Add Product | ODARA Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .main-container {
            flex: 1;
            padding: 40px 0;
            display: flex;
            justify-content: center;
        }

        .form-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 40px;
            width: 100%;
            max-width: 700px;
            /* Limits width so it looks good */
        }

        .form-label {
            font-weight: 500;
            color: #555;
        }

        .form-control,
        .form-select {
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(13, 202, 240, 0.25);
            /* Info color focus */
            border-color: #0dcaf0;
        }

        .footer {
            background-color: #212529;
            color: #adb5bd;
            padding: 40px 0 20px;
            margin-top: auto;
        }

        .footer h5 {
            color: #fff;
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
                    <li class="nav-item"><a class="nav-link active" href="add_product.php">Add Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="view_order.php">View Inventory</a></li>
                </ul>
                <div class="d-flex align-items-center gap-2">
                    <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container main-container">
        <div class="form-card">

            <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
                <h3 class="fw-bold text-dark mb-0">Add New Product</h3>
                <i class="fa-solid fa-circle-plus text-primary fs-3"></i>
            </div>

            <?php if (!empty($message)) echo $message; ?>

            <form action="add_product.php" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="product_name" id="name" class="form-control" placeholder="e.g. Chocolate Lava Cake" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="categorie" class="form-label">Category</label>
                        <select name="categorie_id" id="categorie" class="form-select" required>
                            <?php
                            // Reset pointer just in case
                            if (mysqli_num_rows($result1) > 0) {
                                while ($row = mysqli_fetch_assoc($result1)): ?>
                                    <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                            <?php endwhile;
                            } ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter details about the product..." required></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price (Rs)</label>
                        <div class="input-group">
                            <span class="input-group-text">Rs.</span>
                            <input type="number" name="price" id="price" class="form-control" placeholder="0.00" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="stock_quantity" class="form-label">Stock Quantity</label>
                        <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" placeholder="0" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                    <div class="form-text">Supported formats: JPG, PNG.</div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">
                        <i class="fa-solid fa-save me-2"></i> Save Product
                    </button>
                    <a href="admin_dashbord.php" class="btn btn-outline-secondary">Cancel</a>
                </div>

            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <p class="footer-text mb-0">&copy; 2025 ODARA Admin Panel. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>