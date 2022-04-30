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
    <link rel="stylesheet" href="detail.css">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../layout/footer.css">
    <link rel="stylesheet" href="../layout/fo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php
    include "../config/connect.php";
    echo "<pre>";
        $sql = "SELECT * FROM `products` WHERE `product-id` = " . $_GET['id'];
        $result = mysqli_query(new mysqli('localhost', 'root', '', 'noithat'), $sql);
        $product = mysqli_fetch_assoc($result);
        // var_dump($product);
    echo "</pre>";
    ?>
    
    <div id="header"></div>
    <div class="content container">
        <div class="detail-product row">
            <div class="detail-product-image col-sm-7">
                <img src="../asset/images/products/<?= $product['product-image'] ?>" alt="">
            </div>
            <div class="detail-product-info col-sm-5">
                <h3><?= $product['product-name'] ?></h3>
                <span style="display: block;">Giá: <?= $product['product-price'] ?> VND</span>
                <a href="../cart/cart.php?<?='id='.$product['product-id'] ?>">Thêm vào giỏ hàng</a>
                
            </div>
            <h1>Updating</h1>
        </div>
        <div class="brand row">
            <div class="brand-image col-sm-6">
                <img src="../asset/images/brand.jpg" alt="">
            </div>
            <div class="brand-info col-sm-6">
                <div class="card-body">
                    <span class="text-uppercase">Thương hiệu</span>
                    <h3>Hudson Valley</h3>
                    <p>Thành lập năm 1980 tại Mỹ, Hudson Valley Lighting là thương hiệu đèn lừng danh trên thế giới và được AZ Home phân phối độc quyền tại thị trường Việt Nam. Sản phẩm của Hudson Valley được mệnh danh là “tiêu chuẩn của chiếu sáng” và dẫn đầu xu hướng cho thị trường nhà ở và khách sạn trên toàn thế giới trong gần 40 năm qua. Từ ánh đèn ấm cúng trong phòng khách đến ánh sáng lãng mạn cho các hotel-resort, đèn chiếu sáng của công trình xây dựng, các sản phẩm của Hudson Valley đều đáp ứng xuất sắc</p>
                </div>
            </div>
        </div>
        <div class="brand row revert-col">
            <div class="brand-image col-sm-6">
                <img src="../asset/images/brand.jpg" alt="">
            </div>
            <div class="brand-info col-sm-6">
                <div class="card-body">
                    <span class="text-uppercase">Thương hiệu</span>
                    <h3>Hudson Valley</h3>
                    <p>Thành lập năm 1980 tại Mỹ, Hudson Valley Lighting là thương hiệu đèn lừng danh trên thế giới và được AZ Home phân phối độc quyền tại thị trường Việt Nam. Sản phẩm của Hudson Valley được mệnh danh là “tiêu chuẩn của chiếu sáng” và dẫn đầu xu hướng cho thị trường nhà ở và khách sạn trên toàn thế giới trong gần 40 năm qua. Từ ánh đèn ấm cúng trong phòng khách đến ánh sáng lãng mạn cho các hotel-resort, đèn chiếu sáng của công trình xây dựng, các sản phẩm của Hudson Valley đều đáp ứng xuất sắc</p>
                    <a class="cvb" href="https://azhome.co/product-brand/hudson-valley/">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
    <div id="footer"></div>
        <script src="../asset/js/common.js"></script>
</body>
</html>