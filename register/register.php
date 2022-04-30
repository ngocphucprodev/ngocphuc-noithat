<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../layout/fo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div id="header"></div>
    <div class="register-page container">
        <h1>Updating</h1>
        <div class="row register-form">
            <div class="col-md-12">
                    <h4>Đăng ký</h4>
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Họ về tên">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="frist-name" class="form-control" placeholder="Frist name">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="last-name" class="form-control" placeholder="Last-name">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="telephone" class="form-control" placeholder="Số điện thoại">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="repassword" class="form-control" placeholder="Xác nhận mật khẩu">
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" placeholder="Chọn ảnh đại diện">
                        </div>
                        <div class="contact-button">
                            <button class="btn-azhome" type="submit">Đăng nhập</button>
                        </div>
                        <p>Ban đã có tài khoản? <a class="now-register" href="https://azhome.co/dang-ky/">Đăng nhập ngay</a></p>
                    </form>
                    <?php
                        include "../config/connect.php";
                        if(isset($_POST['username']))
                        {
                            echo "<pre>";
                            var_dump($_POST);
                            echo "</pre>";
                            $username = $_POST['username'];
                            $telephone = $_POST['telephone'];
                            $password = $_POST['password'];
                            $email = $_POST['email'];
                            $image = $_POST['image'];
                           
                            $sql = "INSERT INTO users(username,password,email,telephone)
                            VALUES ('$username','$password','$email','$telephone')";
                            mysqli_query($conn, $sql);

                        }
                    ?>
            </div>
        </div>
    </div>
    <script src="../asset/js/common.js"></script>
</body>
</html>