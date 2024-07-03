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
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">';
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

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Reservation</h2>
                        <div class="bt-option">
                            <a href="/mcc_hotel/room">Room</a>
                            <span>Reservation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="assets/img/room/room-mm3.jpg" alt="">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>Deluxe Room</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <a href="#reservation-section" id="book-now-btn">Book Now</a>
                                </div>
                            </div>
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
                            <p class="f-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, pariatur quo debitis consequatur vitae tempore hic itaque neque nemo aut necessitatibus porro nam atque, earum ducimus ab sint facere voluptate.
                            Quaerat numquam in ut recusandae hic ducimus dolor cupiditate fugit corrupti dolore, accusantium delectus architecto beatae, illo at. Quaerat exercitationem culpa atque perspiciatis ipsa distinctio illo totam omnis ut magnam?
                            Deserunt optio omnis, dolorum voluptates illum ratione? Ratione, a aut voluptatem porro rerum qui omnis voluptate quia non soluta ex commodi fugit? Consequuntur illo earum officia quaerat necessitatibus, odio ex?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ratione cumque repellendus provident perspiciatis exercitationem, quas perferendis facere fugiat dicta. Dolore natus neque accusamus tempore blanditiis laudantium ratione. Eligendi, harum.
                            Illum ab distinctio velit facilis, eligendi sint unde asperiores debitis soluta officia ad expedita! Repellat optio enim facilis sequi quasi aliquam odit, odio totam voluptas placeat quidem, aliquid deserunt ea?
                            </p>
                        </div>
                    </div>
                    <div class="rd-reviews">
                        <h4>Reviews</h4>
                        <div class="review-item">
                            <div class="ri-text">
                                <h5>Cedric Alvarizz</h5>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="ri-text">
                                <h5>Jericho Penino</h5>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt commodi iure, fugit quis quidem explicabo fugiat perferendis qui, adipisci error id amet placeat voluptate. Harum similique alias ex deleniti molestiae!</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-add">
                        <h4>Add Review</h4>
                        <form action="#" class="ra-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <h5>You Rating:</h5>
                                        <div class="rating">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i>
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Review"></textarea>
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4" id="reservation-section">
                    <div class="room-booking">
                        <h3>Reservation</h3>
                        <form action="/mcc_hotel/book" method="POST">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="flatpickr datetime-input" id="date-in" name="checkin" required>
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="flatpickr datetime-input" id="date-out" name="checkout" required>
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest" name="guests">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room" name="room">
                                    <option value="Deluxe Room">DELUXE ROOM</option>
                                </select>
                            </div>
                            <div class="notes">
                                <label for="booking-notes">Additional Notes:</label>
                                <textarea id="booking-notes" name="notes" placeholder="Any special requests or additional information"></textarea>
                            </div>
                            <button class="book-now-btn" type="submit">BOOK NOW</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <?php
        echo '<script src="assets/js/dt.js"></script>';
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