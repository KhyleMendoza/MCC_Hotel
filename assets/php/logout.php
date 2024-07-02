<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: /mcc_hotel/signout");
    exit();
?>
