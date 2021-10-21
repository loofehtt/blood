<?php
include './header.php';
$id = $_GET['id'];
?>
<table class="table table-responsive">
    <thead>
        <tr>
            <th scope="col">Mã số</th>
            <th scope="col">Họ Tên</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Tuổi</th>
            <th scope="col">Nhóm máu</th>
            <th scope="col">Ngày hiến máu</th>
            <th scope="col">Số điên thoại</th>
            <th scope="col">Cập nhật thông tin</th>

        </tr>
    </thead>
    <tbody>
        <!--xuất dữ liệu theo CSDL -->
        <?php
        //* B1: mở kết nối
        include './config.php';
        //* B2: Truy vấn
        $sql = "SELECT * FROM `blood_donor` WHERE bd_id = '$id' ";

        //? lưu kết quả trả về $result
        $result = mysqli_query($conn, $sql);
        $gender;

        //* B3: Phân tích sử lý kết quả
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo '<th scope="row">' . $row['bd_id'] . '</th>';
                echo '<td>' . $row['bd_name'] . '</td>';
                echo '<td>' . $row['bd_sex'] . '</td>';
                echo '<td>' . $row['bd_age'] . '</td>';
                echo '<td>' . $row['bd_bgroup'] . '</td>';
                echo '<td>' . $row['bd_reg_date'] . '</td>';
                echo '<td>' . $row['bd_phno'] . '</td>';
                echo '<td>
                        <a href="process/edit.php?id=' . $id . '" class="btn btn-primary">Sửa</a>
                        <a href="process/delete.php?id=' . $id . '" class="btn btn-danger">Xoá</a>
                      </td>';
                echo '</tr>';
            }
        }
        //* B4: đóng kết nối
        mysqli_close($conn);
        ?>
    </tbody>
</table>
<?php include './footer.php' ?>