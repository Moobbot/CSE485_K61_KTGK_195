<?php
$id = $_POST['patientid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$blood_type = $_POST['blood_type'];
$modified_on = date("yyyy/dd/mm");
//Bước 1:
include 'config.php';

// Bước 2:
$sql = "UPDATE `patient` SET `firstname`='$firstname',`lastname`='$lastname',`gender`='$gender',`mobile`='$mobile',`email`='$email',
`height`='$height',`weight`='$weight',`blood_type`='$blood_type',`modified_on`='$modified_on' WHERE patientid = '$id'";

$result = mysqli_query($conn, $sql);

// Bước 3:
if ($result > 0) {
    header('location:' . WWW);
} else {
    header('location:' . WWW . 'error.php');
}