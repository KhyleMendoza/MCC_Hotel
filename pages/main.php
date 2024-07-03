<?php
    include "assets/php/msession.php";
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
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
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
                <a class="nav-link" href="/mcc_hotel/about">About</a>
            </li>
        </ul>
    </div>
    </nav>

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-6" style="height: 77vh;">
                    <div class="hero-text">
                        <h1 style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">MCC Hotel</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptatum laboriosam vitae laborum excepturi soluta distinctio incidunt illo eos facilis tempore.</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="assets/img/hero/mcc.jpg"></div>
            <div class="hs-item set-bg" data-setbg="assets/img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="assets/img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <div><img src="assets/img/logo/mlogo.png" style="height: 100px;"></div>
                        </div>
                        <p class="f-para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus explicabo deleniti harum sunt odio voluptas suscipit, vel, voluptatibus mollitia molestiae asperiores molestias expedita numquam animi, neque quidem facere! Quidem, ratione.</p>
                        <p class="s-para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, in illo quos cum libero, exercitationem sed explicabo natus sapiente qui.</p>
                        <a href="/mcc_hotel/about" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="assets/img/about/about2.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="assets/img/about/about1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Travel Plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Catering Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Room Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Hire Driver</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Drink</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="assets/img/room/room-b1.jpg">
                            <div class="hr-text">
                                <h3>Double Room</h3>
                                <h2>₱2,500<span> / night</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max 2 person</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>Double Bed</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/mcc_hotel/room" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="assets/img/room/room-b2.jpg">
                            <div class="hr-text">
                                <h3>Deluxe Room</h3>
                                <h2>₱4,500<span> / night</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max 4 person</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Bed</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/mcc_hotel/room" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="assets/img/room/room-b3.jpg">
                            <div class="hr-text">
                                <h3>Family Room</h3>
                                <h2>₱5,500<span> / night</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>40 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max 6 person</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>Queen Bed</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/mcc_hotel/room" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="assets/img/room/room-b4.jpg">
                            <div class="hr-text">
                                <h3>King Room</h3>
                                <h2>₱6,500<span> / night</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>35 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max 2 person</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Bed</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/mcc_hotel/room" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit hic nostrum soluta impedit, minus quidem, harum necessitatibus laboriosam accusamus quia laudantium. Aperiam, temporibus aut veniam nam aliquam alias dignissimos atque.
                            Dolorem voluptatibus veniam quam ex. Enim facere architecto veniam neque reiciendis placeat ab mollitia sint nobis eius repudiandae dolorum necessitatibus iste, quod laboriosam, beatae nemo magni consequuntur doloremque officia repellat?</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5> - Jonas Lacandola</h5>
                            </div>
                        </div>
                        <div class="ts-item">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat est ratione nesciunt beatae eos, nulla voluptatibus, enim officia at, itaque eveniet! Aperiam, voluptate? Veritatis omnis cumque libero rem earum quod.
                            Aliquam blanditiis sapiente similique, vitae praesentium adipisci facilis quasi consequuntur earum fuga consectetur. Nihil necessitatibus dolorem dignissimos commodi, totam sint maxime ratione minus optio! Sunt voluptatum veniam voluptate laudantium consectetur!</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Aguillar</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2024 MCC Hotel. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

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