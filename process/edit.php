<?php
include '../header.php';
include '../config.php';
$id = $_GET['id'];
?>

<main class="container mt-5">
    <h2>Sửa thông tin người hiến máu</h2>
    <form action="edit.php?id=<?php echo $id; ?>" method="post">
        <input type="hidden" class="form-control" name="Id" value="<?php echo $id; ?>">

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
    $id = $_GET['id'];
    $name = $_POST['Name'];
    $gender = $_POST['Gender'];
    $age = $_POST['Age'];
    $bgroup = strtoupper($_POST['Bgroup']);
    $phno = $_POST['Phno'];
    //? set câu lệnh
    $sql = "UPDATE blood_donor SET bd_name='$name', bd_sex='$gender', bd_age=$age, bd_bgroup='$bgroup', bd_phno='$phno' WHERE bd_id = $id";

    //? kiểm tra và thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        header('location:../index.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

//? đóng kết nối
mysqli_close($conn);

include '../footer.php';
