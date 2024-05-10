<?php

require('dbconfig.php');

// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    $user_id = $_GET['id']; // Retrieve user ID from the URL parameter

    $stmt = $conn->prepare("DELETE FROM users WHERE id = :user_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    $conn = null;

    // Redirect back to the index.php after deletion
    header("location: ../index.php");
    exit(); // Stop further execution
} else {
    // Redirect to an error page or handle the error appropriately
    header("location: ../error.php");
    exit(); // Stop further execution
}