<?php
include 'header.php';
include 'config.php';
?>
<?php
$id = $_GET['id'];
echo $id;
$sql = "SELECT * FROM `patient` WHERE patientid = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$dateofbirth = $row['dateofbirth'];
$gender = $row['gender'];
$mobile = $row['mobile'];
$email = $row['email'];
$height = $row['height'];
$weight = $row['weight'];
$blood_type = $row['blood_type'];
?>
<main class="container vh-100">
    <div class="row d-flex justify-content-center h-100">
        <div class="col-12">
            <div class="text-center">
                <h1 class="mt-3 mb-4">Update patient</h1>
            </div>
            <form action="process_update_patient.php" method="POST">

                <table class="">
                    <tr>
                        <td class="p-2"> Họ: </td>
                        <td>
                            <input type="text" name="firstname" value="<?php echo $firstname ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2"> Tên: </td>
                        <td>
                            <input type="text" name="lastname" value="<?php echo $lastname ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Giới tính: </td>
                        <td>
                            <input type="text" name="gender" value="<?php echo $gender ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Số điện thoại: </td>
                        <td>
                            <input type="text" name="mobile" value="<?php echo $mobile ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Email: </td>
                        <td>
                            <input type="email" name="email" value="<?php echo $email ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Chiều cao(m): </td>
                        <td>
                            <input type="text" name="height" value="<?php echo $height ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Cân nặng(kg): </td>
                        <td>
                            <input type="text" name="weight" value="<?php echo $weight ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Nhóm máu: </td>
                        <td>
                            <input type="text" name="blood_type" value="<?php echo $blood_type ?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="patientid" value="<?php echo $id ?>">

                            <input type="submit" name="submit" value="Update patient" class="btn btn-success">
                        </td>
                    </tr>

                </table>

            </form>
        </div>
    </div>
</main>
<?php
include 'footer.php';