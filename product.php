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

    <!-- NAVIGATION BAR -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">ODARA</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProductContent" aria-controls="navbarProductContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarProductContent">

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
                    <button type="button" class="btn btn-info">Log In</button>
                    <button type="button" class="btn btn-outline-warning">Register</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- FILTER SYSTEM -->

    <div class="filter">

        <div class="filter-para"> Filter Items </div>

        <div class="dropdown-catagory">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                CATAGORY
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">MEN</a></li>
                <li><a class="dropdown-item" href="#">Women </a></li>
                <li><a class="dropdown-item" href="#">Moms & Babies</a></li>
            </ul>
        </div>

        <div class="sort-prices">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Price Range
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Min - Max</a></li>
                <li><a class="dropdown-item" href="#">Max - Min </a></li>
            </ul>
        </div>

    </div>


    <!--  PRODUCT GRID  -->

    <div class="products">
        <div class="odora-product-grid">
            <div class="col item1">
                <img src="images/Fragrance-Notes-1024x683.jpg" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span> </div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success">Details</button>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>

            <div class="col item2">
                <img src="images/women sents.avif" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span></div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success">Details</button>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>

            <div class="col item3">
                <img src="images/babies sents.jpeg" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span> </div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success">Details</button>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>

            <div class="col item1">
                <img src="images/Fragrance-Notes-1024x683.jpg" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span></div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success">Details</button>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>

            <div class="col item2">
                <img src="images/women sents.avif" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span></div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success">Details</button>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>

            <div class="col item3">
                <img src="images/babies sents.jpeg" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span></div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success">Details</button>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>

            <div class="col item1">
                <img src="images/Fragrance-Notes-1024x683.jpg" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span></div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success">Details</button>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>

            <div class="col item2">
                <img src="images/women sents.avif" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span> </div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success">Details</button>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>

            <div class="col item3">
                <img src="images/babies sents.jpeg" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span> </div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success">Details</button>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>

        </div>


    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>