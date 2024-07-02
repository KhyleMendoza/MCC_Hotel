<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: /mcc_hotel/");
        exit();
    }
?>