<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MCC Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <style>
        .contact-section {
	padding-top: 80px;
	padding-bottom: 80px;
}
.contact-text h2 {
	font-size: 44px;
	color: #19191a;
	margin-bottom: 24px;
}
.contact-text p {
	color: #707079;
}
.contact-text table tbody tr td {
	font-size: 16px;
	color: #19191a;
	line-height: 36px;
	font-weight: 500;
}
.contact-text table tbody tr td.c-o {
	color: #707079;
	width: 75px;
}
.contact-form input {
	width: 100%;
	height: 50px;
	border: 1px solid #e1e1e1;
	font-size: 16px;
	color: #aaaab3;
	padding-left: 25px;
	margin-bottom: 28px;
}
.contact-form input::-webkit-input-placeholder {
	color: #aaaab3;
}
.contact-form input::-moz-placeholder {
	color: #aaaab3;
}
.contact-form input:-ms-input-placeholder {
	color: #aaaab3;
}
.contact-form input::-ms-input-placeholder {
	color: #aaaab3;
}
.contact-form input::placeholder {
	color: #aaaab3;
}
.contact-form textarea {
	width: 100%;
	height: 150px;
	border: 1px solid #e1e1e1;
	font-size: 16px;
	color: #aaaab3;
	padding-left: 25px;
	padding-top: 12px;
	margin-bottom: 33px;
	resize: none;
}
.contact-form textarea::-webkit-input-placeholder {
	color: #aaaab3;
}
.contact-form textarea::-moz-placeholder {
	color: #aaaab3;
}
.contact-form textarea:-ms-input-placeholder {
	color: #aaaab3;
}
.contact-form textarea::-ms-input-placeholder {
	color: #aaaab3;
}
.contact-form textarea::placeholder {
	color: #aaaab3;
}
.contact-form button {
	font-size: 13px;
	font-weight: 700;
	text-transform: uppercase;
	color: #ffffff;
	letter-spacing: 2px;
	background: #dfa974;
	border: none;
	padding: 14px 34px 13px;
	display: inline-block;
}
    </style>
    <!-- Css Styles -->
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
    <!-- Page Preloder -->
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
                        <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/mcc_hotel/my-reservation">My Reservation</a>
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
                <li class="nav-item active">
                    <a class="nav-link" href="/mcc_hotel/contact">Contact</a>
                </li>
            </ul>
        </div>
        </nav>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>Mabalacat City</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>09212618769</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>mcchotel@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Your Message"></textarea>
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
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