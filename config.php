<?php
    $host = "localhost";       // or "127.0.0.1", both work
    $user = "root";            // Default username for XAMPP
    $pass = "";                // Default password is empty
    $db   = "db_movie";        // Use the name you created in phpMyAdmin
    $port = 3306;

    $con = mysqli_connect($host, $user, $pass, $db, $port) or die(mysqli_connect_error());
?>

