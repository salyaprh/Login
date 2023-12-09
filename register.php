<?php
    require "connect.php"; // Assuming "koneksi.php" includes your database connection code

    $email = $_POST["email"];
    $psw = $_POST["psw"];

    // Use prepared statements to prevent SQL injection
    $query_sql = "INSERT INTO account (email, psw) VALUES (?, ?)";

    // Create a prepared statement
    $stmt = mysqli_prepare($connection, $query_sql);

    if ($stmt) {
        // Bind the parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "ss", $email, $psw);

        if (mysqli_stmt_execute($stmt)) {
            // Successful insertion, redirect to login.php
            header("Location: login.php");
        } else {
            echo "Failed: " . mysqli_error($connection);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare the statement: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
?>
