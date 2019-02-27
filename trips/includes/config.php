<?php
    ob_start();

    session_start();

    $timezone = date_default_timezone_set("Asia/Tokyo");

    $con = new mysqli("localhost", "root", "", "trips");

    if($con->connect_error) {
        echo "Failed to connect. Error code: " . $con->connect_error;
    }
?>
