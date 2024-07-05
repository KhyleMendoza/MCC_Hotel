<?php
    $route = isset($_GET["route"]) ? $_GET["route"] : "";

    switch($route) {
        case "":
            include "pages/main.php";
            break;
        case "room":
            include "pages/room.php";
            break;
        case "my-reservation":
            include "pages/myreservation.php";
            break;
        case "reservation.single-room":
            include "pages/room/single.php";
            break;
        case "reservation.double-room":
            include "pages/room/double.php";
            break;
        case "reservation.deluxe-room":
            include "pages/room/deluxe.php";
            break;
        case "reservation.family-room":
            include "pages/room/family.php";
            break;
        case "reservation.king-room":
            include "pages/room/king.php";
            break;
        case "reservation.executive-suite":
            include "pages/room/executive.php";
            break;
        case "book":
            include "assets/php/book.php";
            break;
        case "about":
            include "pages/about.php";
            break;
        case "login":
            include "pages/login.php";
            break;
        case "register":
            include "pages/login.php";
            break;
        case "logout":
            include "assets/php/logout.php";
            break;
        case "signout":
            include "pages/utils/logout2.php";
            break;
        case "cancel":
            include "assets/php/cancel.php";
            break;
        case "success":
            include "pages/utils/successfully.php";
            break;
        default:
            include "pages/utils/404.php";
            break;
    }
?>