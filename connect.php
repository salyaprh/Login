<?php
    error_reporting(E_ALL); // Enable error reporting for debugging purposes
    session_start();
    $host = "localhost";
    $username = "root";
    $password = ""; // Replace with your database password
    $database = "db_user"; // Corrected the variable name
    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection) {
        echo "Database connection established";
    } else {
        die("MySQL connection error: " . mysqli_connect_error());
    }
?>