<?php
require_once 'core/init.php';
session_start();

if (isset($_POST['login-button'])) {

    // Fixed: Added escaping to prevent SQL errors on inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email ='$email' ";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($row['password'] == $password) {
            echo "<center> <h2 style= color:green; font-weight:bolder ; > Login Successfully ! </h2></center> ";
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['user_role'] = $row['role'];

            if ($_SESSION['user_role'] == "admin") {
                // Fixed: Remove space before colon
                header("Location: admin_dashbord.php");
                exit();
            } else {
                header("Location: index.php");
                exit();
            }
        } else {
            echo "<center> <h2 style= color:red; font-weight:bolder ; > Wrong Password ! </h2></center> ";
        }
    } else {
        echo "<center> <h2 style= color:red; font-weight:bolder ; > You're Not Registered ! </h2></center>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
        margin-top: 7%;
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
                <img src="images/women sents.avif" width="375px" height="375px">
            </div>
            <div class="item2">
                <form action="" method="post">
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-5">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control p-3" id="Password" name="password" required>
                    </div>

                    <center>
                        <button name="login-button" class="btn btn-primary">Log In Now</button><br>
                        <a class="have-account" href="register.php"> Don't have an account ? </a>
                    </center>
                </form>
            </div>
        </div>
        <div class="register-form">
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>