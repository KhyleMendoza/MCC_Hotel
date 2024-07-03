<?php
    session_start();
    include "config.php";

    if (!isset($_SESSION['username']) || empty($_SESSION['username']) || !isset($_SESSION['email']) || empty($_SESSION['email'])) {
        header("Location: /mcc_hotel/login");
        exit();
    }

    $email = $_SESSION['email'];
    $query = "SELECT * FROM reservation WHERE email = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $hasReservations = ($result->num_rows > 0);
?>