<?php
require_once 'core/init.php';
session_start();

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

            //  Get category name using category_id
            $getCat = mysqli_query($conn, "SELECT name FROM categories WHERE id = '$categorie_id'");
            $rowCat = mysqli_fetch_assoc($getCat);
            $categorie_name = $rowCat['name'];


            $sql = "INSERT INTO product (name,description,price,stock_quantity,image,categorie_id,categorie_name)
                    VALUES ('$product_name','$discreption','$price','$stock_quantity','$image','$categorie_id','$categorie_name')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo "<h2 style='color:red'> Error !! {$conn->error} <h2> ";
            } else {
                echo "<h2 style='color:green';> Product Added Successfully !! </h2>";
                move_uploaded_file($temp_location, $upload_location . $image);
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
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    .container {
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        background-color: black;
        border-radius: 30px;
        font-size: large;
    }

    h2 {
        text-align: center;
    }

    .categorie {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
    }
</style>

<body>

    <div class="container mt-5">

        <form action="add_product.php" method="post" enctype="multipart/form-data">
            <h2>Add Product</h2>
            <hr>

            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="name" class="form-control"
                    placeholder="Enter Product Name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control"
                    placeholder="Enter Product Description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control"
                    placeholder="Enter Product Price" required>
            </div>

            <div class="mb-3">
                <label for="stock_quantity" class="form-label">Stock Quantity</label>
                <input type="number" name="stock_quantity" id="stock_quantity" class="form-control"
                    placeholder="Enter Stock Quantity" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>

            <center>
                <div class="categorie">
                    <div class="categorie_name">
                        <select name="categorie_id" class="form-control" required>
                            <option value="">Select Category</option>

                            <?php while ($row = mysqli_fetch_assoc($result1)): ?>
                                <option value="<?= $row['id']; ?>">
                                    <?= $row['name']; ?>
                                </option>
                            <?php endwhile; ?>

                        </select>
                    </div>
                </div>

                <input type="submit" name="submit" class="btn btn-primary m-5" value="Add Product">
            </center>

        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>