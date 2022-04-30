<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../layout/fo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div id="header"></div>
    <div class="login-page container">
        <h1>Updating</h1>
        <div class="row login-form">
            <div class="col-md-12">
                    <h4>Đăng nhập</h4>
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="forget-pass">
                            <div class="miss-login">
                                <input type="hidden" name="rememberme" value="0">
                                <input type="checkbox" name="rememberme" id="remember" value="1">
                                <label></label>
                                <label for="remember">Ghi nhớ đăng nhập</label>
                            </div>

                            <a href="https://azhome.co/dang-nhap/?action=quen-mat-khau">Quên mật khẩu ? </a>
                        </div>
                        <div class="contact-button">
                            <input type="hidden" name="azhome_nonce" value="723b54b4c7">
                            <input class="btn-azhome" type="submit" name="form_click" value="Gửi Dữ Liệu"/><br/>
                        </div>
                        <p>Ban chưa có tài khoản? <a class="now-register" href="https://azhome.co/dang-ky/">Đăng ký ngay</a></p>
                    </form> 
                    <?php
                    if (isset($_POST['email']) && isset($_POST['password']) ){
                        echo 'Tên đăng nhập là: ' . $_POST['email'];
                        echo '<br/>';
                        echo 'Mật khẩu là: ' . $_POST['password'];
                    }
                    ?>
          </div>
        </div>
    </div>
    <script src="../asset/js/common.js"></script>
</body>
</html>