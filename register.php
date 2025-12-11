<?php
require_once 'core/init.php';
$message = "";

if (isset($_POST['register-button'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $mobile_no = $_POST['mobile_no'];
    $role = 'user';

    $sql = "INSERT INTO users(username,email,password,address,mobile_no,role) VALUES ('$username','$email','$password','$address','$mobile_no','$role')";
    $resalt = mysqli_query($conn, $sql);

    if (!$resalt) {
        $message = "<div class='alert alert-danger'>Error: {$conn->error}</div>";
    } else {
        $message = "<div class='alert alert-success'>Registration Successful! <a href='login.php'>Login here</a></div>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | ODARA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container main-container d-flex align-items-center">
        <div class="auth-wrapper">
            <img src="images/Fragrance-Notes-1024x683.jpg" class="auth-image" alt="Register Image">

            <div class="auth-form">
                <h2 class="fw-bold mb-4">Create Account</h2>
                <?php echo $message; ?>

                <form method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="Email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-4">
                        <label for="mobile-no" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" id="mobile-no" name="mobile_no">
                    </div>

                    <div class="d-grid gap-2">
                        <button name="register-button" class="btn btn-primary btn-lg">Register Now</button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="login.php" class="text-decoration-none">Already have an account? Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>