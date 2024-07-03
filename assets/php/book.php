<?php
    session_start();
    include "config.php";

    if (!isset($_SESSION['username']) || empty($_SESSION['username']) || !isset($_SESSION['email']) || empty($_SESSION['email'])) {
        header("Location: /mcc_hotel/login");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $guests = $_POST['guests'];
        $room = $_POST['room'];
        $notes = $_POST['notes'];

        if (empty($checkin) || empty($checkout) || empty($guests) || empty($room)) {
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        }

        $sql = "INSERT INTO reservation (name, email, booktime, checkin, checkout, room, guests, notes, status)
                VALUES (?, ?, NOW(), ?, ?, ?, ?, ?, 'Pending')";

        if ($stmt = $con->prepare($sql)) {
            $stmt->bind_param("sssssss", $_SESSION['username'], $_SESSION['email'], $checkin, $checkout, $room, $guests, $notes);

            if ($stmt->execute()) {
                header("Location: {$_SERVER['HTTP_REFERER']}");
                exit();
            } else {
                echo "Execution failed: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Prepare failed: " . $con->error;
        }
    }
?>
