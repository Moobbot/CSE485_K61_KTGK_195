<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$blood_type = $_POST['blood_type'];

//Bước 1:
include 'config.php';

// Bước 2:
$sql = "INSERT INTO `patient`(`firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`)
    VALUES ('$firstname','$lastname','$dateofbirth','$gender','$mobile','$email','$height','$weight','$blood_type')";

$result = mysqli_query($conn, $sql);

// Bước 3:
if ($result > 0) {
    header('location:' . WWW);
} else {
    header('location:' . WWW . 'error.php');
}