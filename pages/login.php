<?php
session_start();
include "config.php";
$error = '';

if (isset($_SESSION['username'])) {
    header("Location: /mcc_hotel/");
    exit();
}

$currentUrl = $_SERVER['REQUEST_URI'];
$isRegister = strpos($currentUrl, '/register') !== false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (isset($_POST['register'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $confirmPassword = mysqli_real_escape_string($con, $_POST['confirm_password']);

        if ($password !== $confirmPassword) {
            $error = "Password and Confirm Password must be match.";
        } else {
            $checkQuery = "SELECT * FROM users WHERE email=?";
            $stmt = mysqli_prepare($con, $checkQuery);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $checkResult = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($checkResult) > 0) {
                $error = "Email already exists";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $insertQuery = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($con, $insertQuery);
                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
                if (mysqli_stmt_execute($stmt)) {
                    header("Location: /mcc_hotel/login");
                    exit();
                } else {
                    $error = "Registration failed: " . mysqli_error($con);
                }
            }
        }
    } else {
        $query = "SELECT * FROM users WHERE email=?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                header("Location: /mcc_hotel/");
                exit();
            } else {
                $error = "Incorrect email or password";
            }
        } else {
            $error = "Incorrect email or password";
        }
        mysqli_stmt_close($stmt);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCC Hotel</title>
    <link rel="icon" href="assets/img/logo/logo.png">
    <link rel="stylesheet" href="assets/css/login.css" type="text/css">
</head>
<body>
    <div class="container <?php if ($isRegister) echo 'right-panel-active'; ?>" id="container">
        <a href="/mcc_hotel/">
            <img src="assets/img/logo/mlogo.png" alt="Logo" class="logo">
        </a>
        <div class="form-container sign-up-container">
            <form action="/mcc_hotel/register" method="POST">
                <h1 style="white-space: nowrap;">Create Account</h1>
                <input type="text" name="username" placeholder="Username" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required/>
                <button type="submit" name="register">Register</button>
                <span id="overlayLeft2">Already have an account? Sign In</span>
                <?php if ($error && isset($_POST['register'])) { echo '<p style="color: red;">' . $error . '</p>'; } ?>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="/mcc_hotel/login" method="POST">
                <h1>Login</h1>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <button type="submit">Login</button>
                <span id="overlayRight2">Don't have an account yet? Sign Up</span>
                <?php if ($error && !isset($_POST['register'])) { echo '<p style="color: red;">' . $error . '</p>'; } ?>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left" id="overlayLeft">
                    <img class="wimg" src="assets/img/login/7.png">
                </div>
                <div class="overlay-panel overlay-right" id="overlayRight">
                    <img class="wimg" src="assets/img/login/1.png">
                </div>
            </div>
        </div>
    </div>
    <?php
        echo '<script src="assets/js/login.js"></script>';
    ?>
</body>
</html>
