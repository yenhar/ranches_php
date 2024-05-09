<?php

require('dbconfig.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];

$sql = "INSERT INTO users (first_name, last_name, gender)
    VALUES ('" . $first_name . "', '" . $last_name . "', '" . $gender . "')";

$error = "";
$status = "";

if ($conn->query($sql) === TRUE) {
    $status = "success";
} else {
    $status = "failed";
    $error = $conn->error;
}

$conn->close();

if ($status == "success") {
    header("location: ../index.php?status=" . $status);
} else {
    header("location: ../index.php?status=" . $status . "&error=" . $error);
}
