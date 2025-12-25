<?php
require_once 'core/init.php';
session_start();

if (isset($_SESSION['user_id'])) {

    // 1. Allow 'user' role (instead of admin)
    if ($_SESSION['user_role'] == "user") {

        // 2. We use 'id' because the link in user_orders.php is ?id=...
        if (isset($_GET['id'])) {

            $order_id = (int) $_GET['id'];
            $user_id = (int) $_SESSION['user_id'];

            // 3. SECURE SQL: Delete from 'single_order' where ID matches AND User matches
            $sql = "DELETE FROM single_order WHERE id='$order_id' AND user_id='$user_id'";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo "Error {$conn->error}";
                exit();
            } else {
                // 4. Show the Success Card (Your Design)
                echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Successful</title>
    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-color: #f0f2f5;
        font-family: sans-serif;
    }

    .success-card {
        max-width: 480px;
        width: 100%;
        padding: 3rem 2.5rem;
        border: none;
        border-radius: 1.5rem;
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        animation: fadeInUp 0.6s ease-in-out;
    }

    .icon-wrapper i {
        font-size: 5rem;
        color: #28a745;
        margin-bottom: 20px;
    }

    .success-card h1 {
        color: #28a745;
        font-size: 2rem;
    }

    /* Fixed CSS for the button */
    .my-btn {
        display: inline-block;
        background-color: black;
        padding: 12px 30px;
        text-decoration: none;
        border-radius: 50px;
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        transition: all 0.3s ease;
    }

    .my-btn:hover {
        background-color: #FFD43B; /* Yellow */
        color: black;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
</style>
<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card success-card text-center">
        
        <div class="icon-wrapper">
            <i class="fa-solid fa-circle-check"></i>
        </div>

        <h1 class="fw-bold mb-3">Order Cancelled!</h1>
        
        <div class="text-muted mb-4">
            <h5 style="font-weight: normal; line-height: 1.6;">
                Your order has been successfully removed from your list.
            </h5>
        </div>

        <a href="user_orders.php" class="my-btn">
            <i class="fa-solid fa-arrow-left me-2"></i> Go Back to Orders
        </a>

    </div>
</div>  

</body>
</html>
';
            }
        }
    } else {
        header("Location:index.php");
        exit();
    }
} else {
    header("Location:index.php");
    exit();
}
