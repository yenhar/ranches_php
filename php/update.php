<?php



require('dbconfig.php');




$first_name = $_POST['first_name'];

$last_name = $_POST['last_name'];

$gender = $_POST['gender'];

$id = $_GET['id'];

$datetimetoday= date("Y-m-d H:i:s");




$stmt = $conn->prepare("UPDATE `users` SET `first_name`=:first_name, `last_name`=:last_name, `gender`=:gender,  updated_at=:datetimetoday WHERE id = :id");

$stmt->bindParam(':first_name', $first_name);

$stmt->bindParam(':last_name', $last_name);

$stmt->bindParam(':gender', $gender);

$stmt->bindParam(':datetimetoday', $datetimetoday);

$stmt->bindParam(':id', $id);

$stmt->execute();



$conn = null;



header("location: ../index.php");
