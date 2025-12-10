<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>

</head>

<body>



    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.php">ODARA</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">

                <ul class="navbar-nav me-auto fs-4">
                    <li class="nav-item">
                        <a class="nav-link active ms-5 me-5" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3 me-5" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3 me-5" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-3 me-5" href="contact.php">Contact Us</a>
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