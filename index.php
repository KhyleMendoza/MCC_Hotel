<?php
    $route = isset($_GET["route"]) ? $_GET["route"] : "";

    switch($route) {
        case "":
            include "pages/main.php";
            break;
        case "room":
            include "pages/room.php";
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
        case "about":
            include "pages/about.php";
            break;
        case "about2":
            include "pages/about2.php";
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
            include "pages/logout2.php";
            break;
        default:
            include "pages/404.php";
            break;
    }
?>