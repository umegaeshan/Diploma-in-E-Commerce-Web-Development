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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

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
    animation: 0.5s ease-in-out;
}

.success-card h1 {
    color: #28a745;
}

.success-card .btn {
    transition: all 0.3s ease;
}

.success-card .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

a{
background-color:black;
padding:10px;
text-decoration:none;
border-radius:10px;
 animation: 0.5s ease-in-out;
 margin:30px;
 font-size:20px;
 font-weight:bolder;
 color:white;
{

a:hover{
background-color:yellow;
color:black;
}



</style>
<body>
<center>
 <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card success-card text-center">
        
        <div class="icon-wrapper mb-4">
            <i class="fa-solid fa-circle-check"></i>
        </div>

        <h1 class="fw-bold mb-3">Delete Successful!</h1>
        <p class="text-muted mb-4">
        <h3>
            The item has been successfully removed from the database.
        </h3>
        </p>

        <a href="view_order.php" class="btn btn-dark btn-lg rounded-pill px-5">
            <i class="fa-solid fa-arrow-left me-2"></i> Go Back
        </a>

    </div>
</div>  
</center> 
</body>
</html>


';
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
