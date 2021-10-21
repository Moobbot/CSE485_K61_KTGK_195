<?php include 'header.php' ?>

<main>
    <div class="container-fluid">
        <div class="row m-md-5 m-1">
            <div class="col-md-12 text-center">
                <h1>Bệnh viện Thuỷ Lợi</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table">
                    <thead class="table-dark text-white">
                        <tr>
                            <th class="col">
                                id
                            </th>
                            <th class="col">
                                Họ
                            </th>
                            <th class="col">
                                Tên
                            </th>
                            <th class="col">
                                Ngày sinh
                            </th>
                            <th class="col">
                                Giới tính
                            </th>
                            <th class="col">
                                mobile
                            </th>
                            <th class="col">
                                email
                            </th>
                            <th class="col-1">
                                Chiều cao(m)
                            </th>
                            <th class="col-1">
                                Cân nặng(kg)
                            </th>
                            <th class="col-1">
                                Nhóm máu
                            </th>
                            <th class="col">
                                Ngày tạo
                            </th>
                            <th class="col">
                                Cập nhật ngày
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dữ liệu thay đổi theo CSDL -->
                        <?php
                        // Quy trình 4 bước:
                        // Bước 1: Kết nối CSDL
                        include 'config.php';
                        $id = $_GET['id'];
                        // Bước 2: Thực hiện TRUY VẤN
                        $sql = "SELECT * FROM `patient` WHERE patientid = '$id'";
                        $result = mysqli_query($conn, $sql);
                        // Bước 3: Phân tích và xử lý kết quả
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['patientid'];
                                echo '<tr>';
                                echo '<th class="col">' . $row['patientid'] . '</th>';
                                echo '<th class="col">' . $row['firstname'] . '</th>';
                                echo '<th class="col">' . $row['lastname'] . '</th>';
                                echo '<th class="col">' . $row['dateofbirth'] . '</th>';
                                echo '<th class="col">' . $row['gender'] . '</th>';
                                echo '<th class="col">' . $row['mobile'] . '</th>';
                                echo '<th class="col">' . $row['email'] . '</th>';
                                echo '<th class="col text-center">' . $row['height'] . '</th>';
                                echo '<th class="col text-center">' . $row['weight'] . '</th>';
                                echo '<th class="col text-center">' . $row['blood_type'] . '</th>';
                                echo '<th class="col">' . $row['created_on'] . '</th>';
                                echo '<th class="col">' . $row['modified_on'] . '</th>';
                                echo '<th class="col">'
                                    . '<a href="Update.php?id=' . $id . '"class="btn btn-success p-1 ps-2 pe-2 me-1">Sửa</a>'
                                    . '<a href="delete.php?id=' . $id . '"class="btn btn-success p-1 ps-2 pe-2">Xóa</a>' . ' </th>';
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>

<?php include 'footer.php' ?>