<?php
    $conn = new mysqli("localhost", "root", "", "perpusonline");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    error_log ('Connection Success');
?>