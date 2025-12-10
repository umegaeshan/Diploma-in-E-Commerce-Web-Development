<?php require_once 'core/init.php' ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="log-registers.css">

    <script src="https://kit.fontawesome.com/03c57d27b5.js" crossorigin="anonymous"></script>

</head>


<style>
    .container {
        background-color: white;
        border-radius: 30px;
        box-shadow: 2px 2px 40px 20px;
    }

    .odora-grid {
        margin-top: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
    }

    img {
        height: 700px;
        width: 600px;
    }

    .item2 {
        width: 40%;
        font-size: 20px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;

    }

    .have-account {
        color: red;
        padding: 3%;
    }

    .btn:hover {
        background-color: yellow;
        color: black;
    }

    input {
        border-radius: 20px;
    }
</style>



<body>

    <div class="container">
        <div class="odora-grid">
            <div class="item1">
                <img src="images\women sents.avif" width="375px" height="375px"></img>
            </div>
            <div class="item2">
                <form>
                    <div class="mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="mb-5">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control p-3" id="Password">
                    </div>

                    <center>
                        <a href="index.php" class="btn btn-primary">Log In Now</a><br>
                        <a class="have-account" href="register.php"> Alrady have't account ? </a>
                    </center>

                </form>
            </div>

        </div>

        <div class="register-form">

        </div>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>






</body>

</html>