<?php
session_start();
include "config.php";

if (!isset($_SESSION['username']) || empty($_SESSION['username']) || !isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header("Location: /mcc_hotel/login");
    exit();
}

$email = $_SESSION['email'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cancel_id'])) {
    $cancel_id = $_POST['cancel_id'];

    $updateQuery = "UPDATE reservation SET status = 'cancelled' WHERE book_id = ? AND status = 'pending'";
    $updateStmt = $con->prepare($updateQuery);
    $updateStmt->bind_param("i", $cancel_id);
    
    if ($updateStmt->execute()) {
        $_SESSION['message'] = "Reservation cancelled successfully.";
    } else {
        $_SESSION['message'] = "Failed to cancel reservation.";
    }
    $updateStmt->close();
    
    header("Location: /mcc_hotel/my_reservations");
    exit();
}

$query = "SELECT * FROM reservation WHERE email = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$hasReservations = ($result->num_rows > 0);
?>
