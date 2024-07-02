<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "hotel";

    $con = mysqli_connect($server, $user, $password, $database);

    if (!$con) {
        die("Connection Failed: " . mysqli_connect_error());
    }
?>