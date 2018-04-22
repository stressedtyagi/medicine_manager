<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "medicine_manager";
    $conn = mysqli_connect($servername,$username,$pass,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
