<!-- 
    Người code: Ngô Đức Tâm
    Ngày: 21/10021
    Đề tài: Hệ thống quản lý bệnh viện
 -->
<?php
include 'header.php';
?>

<main>
    <div class="container-fluid">
        <div class="row m-md-5 m-1">
            <div class="col-md-12 text-center">
                <h1>Bệnh viện Thuỷ Lợi</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- <input type="submit" value="Thêm" class="btn btn-success"> -->
                <a href="./function/Add.php" class="btn btn-success p-2 ps-3 pe-3">Thêm</a>
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
                                Giới tính
                            </th>
                            <th class="col">
                                mobile
                            </th>
                            <th class="col">
                                email
                            </th>
                            <th class="col">
                                Nhóm máu
                            </th>
                            <th class="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dữ liệu thay đổi theo CSDL -->
                        <?php
                        // Quy trình 4 bước:
                        // Bước 1: Kết nối CSDL
                        include 'config.php';
                        // Bước 2: Thực hiện TRUY VẤN
                        $sql = "SELECT `patientid`, `firstname`, `lastname`, `gender`, `mobile`, `email`, `blood_type`, `created_on`, `modified_on` FROM `patient`";
                        $result = mysqli_query($conn, $sql);
                        // Bước 3: Phân tích và xử lý kết quả
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['patientid'];
                                echo '<tr>';
                                echo '<th class="col">' . $id . '</th>';
                                echo '<th class="col">' . $row['firstname'] . '</th>';
                                echo '<th class="col">' . $row['lastname'] . '</th>';
                                echo '<th class="col">' . $row['gender'] . '</th>';
                                echo '<th class="col">' . $row['mobile'] . '</th>';
                                echo '<th class="col">' . $row['email'] . '</th>';
                                echo '<th class="col">' . $row['blood_type'] . '</th>';
                                echo '<th class="col">' . '<a href="' . 'details.php?id=' . $id . '">Chi tiết</a></th>';
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

<?php include 'footer.php';
