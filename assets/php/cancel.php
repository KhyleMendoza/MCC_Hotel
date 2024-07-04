<?php
session_start();
include "config.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $reservation_id = $_GET['id'];

    $sql = "UPDATE reservation SET status = 'Cancelled' WHERE book_id = ?";
    
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param("i", $reservation_id);

        if ($stmt->execute()) {
            header("Location: /mcc_hotel/my-reservation");
        } else {
            echo "Error updating reservation: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Prepare failed: " . $con->error;
    }
    
    $con->close();
    header("Location: /mcc_hotel/my-reservation");
    exit();
} else {
    echo "Invalid reservation ID.";
}
?>
