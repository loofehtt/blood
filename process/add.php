<?php
include '../header.php';
include '../config.php';
?>

<main class="container mt-5">
    <h2>Thêm thông tin người hiến</h2>
    <form action="add.php" method="post">
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tên người hiến:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Giới tính</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Gender">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tuổi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Age">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Nhóm máu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Bgroup">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Số di động</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Phno">
            </div>
        </div>

        <div class="form-group row">
            <label for="saveBtn" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" name="Save" class="btn btn-success">Lưu lại</button>
            </div>
        </div>




    </form>
</main>

<?php
if (isset($_POST['Save'])) {
    $name = $_POST['Name'];
    $gender = $_POST['Gender'];
    $age = $_POST['Age'];
    $bgroup = strtoupper($_POST['Bgroup']);
    $phno = $_POST['Phno'];
    //? câu lệnh
    $sql = "INSERT INTO `blood_donor`(`bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_phno`)
    VALUES ('$name','$gender','$age','$bgroup','$phno')";

    //? kiểm tra và thực thi lệnh
    $result = mysqli_query($conn, $sql);
    if ($result > 0) {
        header('location:../index.php');
    } else {
        header('location:Error.php');
    }
}


//? đóng kết nối
mysqli_close($conn);

include '../footer.php';
