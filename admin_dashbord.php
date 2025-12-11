<?php require_once 'core/init.php' ?>
<?php
session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == "admin") {
        // User is admin, stay here
    } else {
        echo "Go for user dashbord ";
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="loading-animation">
        <div class="loader"></div>
    </div>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">ODARA <span style="font-size: 10px;">admin</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto fs-4">
                    <li class="nav-item">
                        <a class="nav-link active ms-5 me-5" aria-current="page" href="admin_dashbord.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-5 me-5" aria-current="page" href="add_product.php">Add Products</a>
                    </li>
                </ul>
                <form class="d-flex me-5" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button type="button" class="btn btn-outline-info">Search</button>
                </form>

                <div>
                    <a href="login.php" class="btn btn-info" role="button">Log In</a>
                    <a href="register.php" class="btn btn-outline-warning">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <footer class="footer">
        <div class="container">
            <div class="A">Lorem ipsum dolor sit amet consectetur.</div>
            <div class="A">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta minima quas, ut cum exercitationem commodi! Nobis ratione perferendis inventore quam.</div>
            <div class="A">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, voluptatibus quisquam nemo facilis harum vel!</div>
            <div class="A">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, nisi.</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>