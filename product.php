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

            <!-- PRODUCT 1 -->

            <div class="col item1">
                <img src="images\03 freedom.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">O3 FREEDOM
                    </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span> </div>
                    <div class="our"> Our Price :$ 2,25.00</div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_1">Details</button>

                    <!-- MODDEL -->

                    <div class="modal fade p-5" id="detailsModal_1" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Adidas Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>
                                        <img src="images\03 freedom.webp" width="275px" height="275px">
                                    <h2>O3 FREEDOM COLOGNE SPRAY 100ml</h2>
                                    <hr>
                                    <h3>Description</h3>
                                    Vibrant, fruity, and full of energy, Freedom takes the concept and runs with it. A flexible fragrance that can be worn day-in and day-out, all crafted using internationally acclaimed scent accords.</p>
                                    <br>
                                    <p>
                                        Rs2,250.00
                                    </p>
                                    <hr>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 148px; position:absolute; margin-bottom:45px;">Close</button>
                                    <button type="button" class="btn btn-primary mb-5 ">Add to Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>



            <!-- PRODUCT 2 -->

            <div class="col item2">
                <img src="images\adidas.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Adidas </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span></div>
                    <div class="our"> Our Price :$ 59.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_2">Details</button>

                    <!-- MODDEL -->

                    <div class="modal fade p-5" id="detailsModal_2" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Adidas Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>
                                        <img src="images\adidas.webp" width="275px" height="275px">
                                    <h2>O3 FREEDOM COLOGNE SPRAY 100ml</h2>
                                    <hr>
                                    <h3>Description</h3>
                                    Vibrant, fruity, and full of energy, Freedom takes the concept and runs with it. A flexible fragrance that can be worn day-in and day-out, all crafted using internationally acclaimed scent accords.</p>
                                    <br>
                                    <p>
                                        Rs2,250.00
                                    </p>
                                    <hr>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 148px; position:absolute; margin-bottom:45px;">Close</button>
                                    <button type="button" class="btn btn-primary mb-5 ">Add to Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">2% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>


            <!-- PRODUCT 3 -->

            <div class="col item3">
                <img src="images\black knight.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Black Knight </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span> </div>
                    <div class="our"> Our Price :$ 34.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_3">Details</button>

                    <!-- MODDEL -->

                    <div class="modal fade p-5" id="detailsModal_3" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Adidas Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>
                                        <img src="images\black knight.webp" width="275px" height="275px">
                                    <h2>O3 FREEDOM COLOGNE SPRAY 100ml</h2>
                                    <hr>
                                    <h3>Description</h3>
                                    Vibrant, fruity, and full of energy, Freedom takes the concept and runs with it. A flexible fragrance that can be worn day-in and day-out, all crafted using internationally acclaimed scent accords.</p>
                                    <br>
                                    <p>
                                        Rs2,250.00
                                    </p>
                                    <hr>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 148px; position:absolute; margin-bottom:45px;">Close</button>
                                    <button type="button" class="btn btn-primary mb-5 ">Add to Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">1% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>


            <!-- PRODUCT 4 -->

            <div class="col item4">
                <img src="images\brut.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Brut Original </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span></div>
                    <div class="our"> Our Price :$ 87.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_4">Details</button>

                    <!-- MODDEL -->

                    <div class="modal fade p-5" id="detailsModal_4" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Adidas Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>
                                        <img src="images\brut.webp" width="275px" height="275px">
                                    <h2>O3 FREEDOM COLOGNE SPRAY 100ml</h2>
                                    <hr>
                                    <h3>Description</h3>
                                    Vibrant, fruity, and full of energy, Freedom takes the concept and runs with it. A flexible fragrance that can be worn day-in and day-out, all crafted using internationally acclaimed scent accords.</p>
                                    <br>
                                    <p>
                                        Rs2,250.00
                                    </p>
                                    <hr>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 148px; position:absolute; margin-bottom:45px;">Close</button>
                                    <button type="button" class="btn btn-primary mb-5 ">Add to Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger" disabled>5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>


            <!-- PRODUCT 5 -->

            <div class="col item5">
                <img src="images\voodoo.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Voodoo </div>
                    <div class="list"> List Price :<span class="list-price"> $53.21</span></div>
                    <div class="our"> Our Price :$ 49.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_5">Details</button>

                    <!-- MODDEL -->

                    <div class="modal fade p-5" id="detailsModal_5" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Adidas Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>
                                        <img src="images\voodoo.webp" width="275px" height="275px">
                                    <h2>O3 FREEDOM COLOGNE SPRAY 100ml</h2>
                                    <hr>
                                    <h3>Description</h3>
                                    Vibrant, fruity, and full of energy, Freedom takes the concept and runs with it. A flexible fragrance that can be worn day-in and day-out, all crafted using internationally acclaimed scent accords.</p>
                                    <br>
                                    <p>
                                        Rs2,250.00
                                    </p>
                                    <hr>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 148px; position:absolute; margin-bottom:45px;">Close</button>
                                    <button type="button" class="btn btn-primary mb-5 ">Add to Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">7% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>


            <!-- PRODUCT 6 -->

            <div class="col item6">
                <img src="images/Fuck.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Fuck </div>
                    <div class="list"> List Price :<span class="list-price"> $23.21</span></div>
                    <div class="our"> Our Price :$ 19.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_6">Details</button>

                    <!-- MODDEL -->

                    <div class="modal fade p-5" id="detailsModal_6" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Adidas Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>
                                        <img src="images/Fuck.webp" width="275px" height="275px">
                                    <h2>O3 FREEDOM COLOGNE SPRAY 100ml</h2>
                                    <hr>
                                    <h3>Description</h3>
                                    Vibrant, fruity, and full of energy, Freedom takes the concept and runs with it. A flexible fragrance that can be worn day-in and day-out, all crafted using internationally acclaimed scent accords.</p>
                                    <br>
                                    <p>
                                        Rs2,250.00
                                    </p>
                                    <hr>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 148px; position:absolute; margin-bottom:45px;">Close</button>
                                    <button type="button" class="btn btn-primary mb-5 ">Add to Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">5% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>


            <!-- PRODUCT 7 -->

            <div class="col item7">
                <img src="images\paco.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Paco Rabanne </div>
                    <div class="list"> List Price :<span class="list-price"> $73.21</span></div>
                    <div class="our"> Our Price :$ 69.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_7">Details</button>

                    <!-- MODDEL -->

                    <div class="modal fade p-5" id="detailsModal_7" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Adidas Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>
                                        <img src="images\paco.webp" width="275px" height="275px">
                                    <h2>O3 FREEDOM COLOGNE SPRAY 100ml</h2>
                                    <hr>
                                    <h3>Description</h3>
                                    Vibrant, fruity, and full of energy, Freedom takes the concept and runs with it. A flexible fragrance that can be worn day-in and day-out, all crafted using internationally acclaimed scent accords.</p>
                                    <br>
                                    <p>
                                        Rs2,250.00
                                    </p>
                                    <hr>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 148px; position:absolute; margin-bottom:45px;">Close</button>
                                    <button type="button" class="btn btn-primary mb-5 ">Add to Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">1% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>



            <!-- PRODUCT 8 -->

            <div class="col item8">
                <img src="images\optimum.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">OPTIMUM COLOGNE </div>
                    <div class="list"> List Price :<span class="list-price"> $63.21</span> </div>
                    <div class="our"> Our Price :$ 59.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_8">Details</button>

                    <!-- MODDEL -->

                    <div class="modal fade p-5" id="detailsModal_8" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Adidas Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>
                                        <img src="images\optimum.webp" width="275px" height="275px">
                                    <h2>O3 FREEDOM COLOGNE SPRAY 100ml</h2>
                                    <hr>
                                    <h3>Description</h3>
                                    Vibrant, fruity, and full of energy, Freedom takes the concept and runs with it. A flexible fragrance that can be worn day-in and day-out, all crafted using internationally acclaimed scent accords.</p>
                                    <br>
                                    <p>
                                        Rs2,250.00
                                    </p>
                                    <hr>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 148px; position:absolute; margin-bottom:45px;">Close</button>
                                    <button type="button" class="btn btn-primary mb-5 ">Add to Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">4% OFF</button>
                </div>
                <div class="fav-button">
                    <i class="fa-regular fa-heart fa-lg" style="color: #fe1621;"></i>
                    <!-- <i class="fa-solid fa-heart fa-lg" style="color: #fe1621;"></i> -->
                </div>
            </div>



            <!-- PRODUCT 9 -->

            <div class="col item9">
                <img src="images\giorgio.webp" width="275px" height="275px">
                <div class="product-details">
                    <div class="name">Giorgio Ara </div>
                    <div class="list"> List Price :<span class="list-price"> $103.21</span> </div>
                    <div class="our"> Our Price :$ 99.99 </div>
                </div>
                <div class="product-button">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailsModal_9">Details</button>

                    <!-- MODDEL -->

                    <div class="modal fade p-5" id="detailsModal_9" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailsModalLabel">Adidas Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>
                                        <img src="images\giorgio.webp" width="275px" height="275px">
                                    <h2>O3 FREEDOM COLOGNE SPRAY 100ml</h2>
                                    <hr>
                                    <h3>Description</h3>
                                    Vibrant, fruity, and full of energy, Freedom takes the concept and runs with it. A flexible fragrance that can be worn day-in and day-out, all crafted using internationally acclaimed scent accords.</p>
                                    <br>
                                    <p>
                                        Rs2,250.00
                                    </p>
                                    <hr>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 148px; position:absolute; margin-bottom:45px;">Close</button>
                                    <button type="button" class="btn btn-primary mb-5 ">Add to Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="product-offer-button">
                    <button type="button" class="btn btn-outline-danger">7% OFF</button>
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