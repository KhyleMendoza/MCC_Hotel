<?php
    include "assets/php/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MCC Hotel</title>
    <link rel="icon" href="assets/img/logo/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <?php
        echo '<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/style.css" type="text/css">';
        echo '<link rel="stylesheet" href="assets/css/nav.css" type="text/css">';
    ?>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
    <img src="assets/img/logo/mlogo.png" style="height: 5vh;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/mcc_hotel/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mcc_hotel/room">Rooms</a>
            </li>
            <?php if(isset($_SESSION['username'])): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">My Reservation</a>
                    <a class="dropdown-item" href="/mcc_hotel/logout">Logout</a>
                </div>
            </li>
            <?php else: ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/mcc_hotel/login">Login</a>
                    <a class="dropdown-item" href="/mcc_hotel/register">Register</a>
                </div>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
    </div>
    </nav>

    

    <?php
        echo '<script src="assets/js/jquery-3.3.1.min.js"></script>';
        echo '<script src="assets/js/bootstrap.min.js"></script>';
        echo '<script src="assets/js/jquery.magnific-popup.min.js"></script>';
        echo '<script src="assets/js/jquery.nice-select.min.js"></script>';
        echo '<script src="assets/js/jquery-ui.min.js"></script>';
        echo '<script src="assets/js/jquery.slicknav.js"></script>';
        echo '<script src="assets/js/owl.carousel.min.js"></script>';
        echo '<script src="assets/js/main.js"></script>';
    ?>
</body>
</html>
