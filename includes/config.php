<?php
    
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("America/Edmonton");

    $con = mysqli_connect("localhost", "root", "", "slotifydb");

    if(mysqli_connect_errno()) {
        echo "failed to connect: " . mysqli_connect_errno();
    }

?>