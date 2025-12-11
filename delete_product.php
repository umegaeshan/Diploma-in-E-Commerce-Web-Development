<?php
include 'core/init.php';
session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == "admin") {
        if (isset($_GET['product_id'])) {

            $product_id = $_GET['product_id'];
            $sql = "DELETE FROM product WHERE id='$product_id';";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo "Error {$conn->error}";
                exit();
            } else {
                echo '
<div class="container d-flex justify-content-center mt-5">
    <div class="card shadow-sm p-5 border-0 rounded-4 text-center" style="max-width: 500px; width: 100%;">
        
        <div class="mb-3">
            <i class="fa-solid fa-circle-check text-success fa-5x"></i>
        </div>

        <h2 class="fw-bold text-success mb-3">Delete Successful!</h2>
        <p class="text-muted mb-4">The item has been successfully removed from the database.</p>

        <a href="view_order.php" class="btn btn-dark btn-lg rounded-pill px-4">
            <i class="fa-solid fa-arrow-left me-2"></i> Go Back
        </a>

    </div>
</div>';
            }
        }
    } else {
        echo "go for user dashbord";
        exit();
    }
} else {
    header("Location:index.php");
    exit();
}
