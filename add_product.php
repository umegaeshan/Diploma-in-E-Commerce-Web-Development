<?php
require_once 'core/init.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SESSION['user_role'] != "admin") {
    echo "Go to user dashboard";
    exit();
}

// Basic logic to handle form submission if needed later
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // You can add your INSERT code here later
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Add Product</h2>
        <form action="add_product.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product Name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Enter Product Description" required></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Add Product">
        </form>
    </div>

    <footer class="footer mt-5">
        <div class="container">
            <div class="A">Lorem ipsum dolor sit amet consectetur.</div>
            <div class="A">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta minima quas.</div>
            <div class="A">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, voluptatibus quisquam.</div>
            <div class="A">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nisi.</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>