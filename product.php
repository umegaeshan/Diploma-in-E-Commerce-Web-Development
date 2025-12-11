<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>
</head>

<body>

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
                    <a href="login.php" class="btn btn-info">Log In</a>
                    <a href="register.php" class="btn btn-outline-warning">Register</a>
                </div>
            </div>
        </div>
    </nav>

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

    <div class="products">
        <div class="odora-product-grid">

            <div class="col item1">
                <img src="images/03 freedom.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">O3 FREEDOM</div>
                    <div class="list">List Price: <span class="list-price">$23.21</span></div>
                    <div class="our">Our Price: $225.00</div>
                    <div class="quantity">Quantity : 59.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_1">Details</button>
                </div>

                <div class="modal fade p-5" id="detailsModal_1" tabindex="-1" aria-labelledby="detailsModalLabel_1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel_1">O3 Freedom Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <img src="images/03 freedom.webp" width="275" height="275">
                                <h2>O3 Freedom Cologne Spray 100ml</h2>
                                <hr>
                                <h3>Description</h3>
                                <p>Vibrant, fruity, and full of energy. A flexible fragrance crafted using internationally acclaimed scent accords.</p>
                                <p>Price: Rs 2,250.00</p>
                                <hr>
                            </div>
                            <div class="modal-footer">
                                <a href="login.php" class="btn btn-outline-danger" role="button">Close</a>
                                <a href="register.php" class="btn btn-outline-warning">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color:#fe1621;"></i>
                </div>
            </div>

            <div class="col item1">
                <img src="images/03 freedom.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">O3 FREEDOM</div>
                    <div class="list">List Price: <span class="list-price">$23.21</span></div>
                    <div class="our">Our Price: $225.00</div>
                    <div class="quantity">Quantity : 59.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_2">Details</button>
                </div>

                <div class="modal fade p-5" id="detailsModal_2" tabindex="-1" aria-labelledby="detailsModalLabel_2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel_2">O3 Freedom Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <img src="images/03 freedom.webp" width="275" height="275">
                                <h2>O3 Freedom Cologne Spray 100ml</h2>
                                <hr>
                                <h3>Description</h3>
                                <p>Vibrant, fruity, and full of energy. A flexible fragrance crafted using internationally acclaimed scent accords.</p>
                                <p>Price: Rs 2,250.00</p>
                                <hr>
                            </div>
                            <div class="modal-footer">
                                <a href="login.php" class="btn btn-outline-danger" role="button">Close</a>
                                <a href="register.php" class="btn btn-outline-warning">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color:#fe1621;"></i>
                </div>
            </div>

            <div class="col item1">
                <img src="images/03 freedom.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">O3 FREEDOM</div>
                    <div class="list">List Price: <span class="list-price">$23.21</span></div>
                    <div class="our">Our Price: $225.00</div>
                    <div class="quantity">Quantity : 59.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_3">Details</button>
                </div>

                <div class="modal fade p-5" id="detailsModal_3" tabindex="-1" aria-labelledby="detailsModalLabel_3" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel_3">O3 Freedom Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <img src="images/03 freedom.webp" width="275" height="275">
                                <h2>O3 Freedom Cologne Spray 100ml</h2>
                                <hr>
                                <h3>Description</h3>
                                <p>Vibrant, fruity, and full of energy. A flexible fragrance crafted using internationally acclaimed scent accords.</p>
                                <p>Price: Rs 2,250.00</p>
                                <hr>
                            </div>
                            <div class="modal-footer">
                                <a href="login.php" class="btn btn-outline-danger" role="button">Close</a>
                                <a href="register.php" class="btn btn-outline-warning">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color:#fe1621;"></i>
                </div>
            </div>

            <div class="col item1">
                <img src="images/03 freedom.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">O3 FREEDOM</div>
                    <div class="list">List Price: <span class="list-price">$23.21</span></div>
                    <div class="our">Our Price: $225.00</div>
                    <div class="quantity">Quantity : 59.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_4">Details</button>
                </div>

                <div class="modal fade p-5" id="detailsModal_4" tabindex="-1" aria-labelledby="detailsModalLabel_4" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel_4">O3 Freedom Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <img src="images/03 freedom.webp" width="275" height="275">
                                <h2>O3 Freedom Cologne Spray 100ml</h2>
                                <hr>
                                <h3>Description</h3>
                                <p>Vibrant, fruity, and full of energy. A flexible fragrance crafted using internationally acclaimed scent accords.</p>
                                <p>Price: Rs 2,250.00</p>
                                <hr>
                            </div>
                            <div class="modal-footer">
                                <a href="login.php" class="btn btn-outline-danger" role="button">Close</a>
                                <a href="register.php" class="btn btn-outline-warning">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color:#fe1621;"></i>
                </div>
            </div>

        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>