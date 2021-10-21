<?php
include 'header.php';
include 'config.php';
?>
<main class="container vh-100">
    <div class="row d-flex justify-content-center h-100">
        <div class="col-12">
            <div class="text-center">
                <h1 class="mt-3 mb-4">Add patient</h1>
            </div>
            <form action="process_add_patient.php" method="POST">

                <table class="">
                    <tr>
                        <td class="p-2"> Họ: </td>
                        <td>
                            <input type="text" name="firstname" placeholder="Ex: Nguyễn">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2"> Tên: </td>
                        <td>
                            <input type="text" name="lastname" placeholder="Ex: Thanh">
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2"> Ngày sinh: </td>
                        <td>
                            <input type="date" name="dateofbirth">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Giới tính: </td>
                        <td>
                            <input type="text" name="gender" placeholder="Nam/Nữ">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Số điện thoại: </td>
                        <td>
                            <input type="text" name="mobile" placeholder="Your phone number">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Email: </td>
                        <td>
                            <input type="email" name="email" placeholder="Your email.">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Chiều cao(m): </td>
                        <td>
                            <input type="text" name="height" placeholder="Ex: 1.8">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Cân nặng(kg): </td>
                        <td>
                            <input type="text" name="weight" placeholder="Ex: 58">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Nhóm máu: </td>
                        <td>
                            <input type="text" name="blood_type" placeholder="Your blood type">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add patient" class="btn btn-success">
                        </td>
                    </tr>

                </table>

            </form>
        </div>
    </div>
</main>
<?php
include 'footer.php';