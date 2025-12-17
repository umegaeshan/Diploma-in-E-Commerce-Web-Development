<?php
require_once 'core/init.php';
session_start(); // Session start should be at the top

$message = ""; // To store alerts

if (isset($_POST['login-button'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email ='$email' ";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] == $password) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['user_role'] = $row['role'];

            if ($_SESSION['user_role'] == "admin") {
                header("Location: admin_dashbord.php");
                exit();
            } else {
                header("Location: index.php");
                exit();
            }
            exit();
        } else {
            $message = "<div class='alert alert-danger'>Wrong Password!</div>";
        }
    } else {
        $message = "<div class='alert alert-danger'>You're Not Registered!</div>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In | ODARA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container main-container d-flex align-items-center">
        <div class="auth-wrapper">
            <img src="images/women sents.avif" class="auth-image" alt="Login Image">

            <div class="auth-form">
                <h2 class="fw-bold mb-4">Welcome Back</h2>
                <?php echo $message; ?>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-4">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" name="password" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button name="login-button" class="btn btn-dark btn-lg">Log In</button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="register.php" class="text-decoration-none">Don't have an account? Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>