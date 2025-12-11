<?php require_once 'core/init.php' ?>

<?php
if (isset($_POST['register-button'])) {

    // Fixed: Escaping inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
    $role = 'user';

    $sql = "INSERT INTO users(username,email,password,address,mobile_no,role) VALUES
            ('$username','$email','$password','$address','$mobile_no','$role')";

    $result = mysqli_query($conn, $sql);

    // Fixed variable name typo: $resalt -> $result
    if (!$result) {
        echo "Error !!: {$conn->error}";
    } else {
        echo "<center> <h3 style='color:green; font-weight:bolder;'> Registration Successfully !</h3> </center> ";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register.php</title>
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
        margin-top: 5%;
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
                <img src="images/Fragrance-Notes-1024x683.jpg" width="375px" height="375px">
            </div>
            <div class="item2">
                <form method="post">
                    <div class="mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-4">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-4">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-4">
                        <label for="mobile-no" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" id="mobile-no" name="mobile_no" required>
                    </div>

                    <center>
                        <button name="register-button" class="btn btn-primary">Register Now </button><br>
                        <a class="have-account" href="login.php"> Already have an account ? </a>
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