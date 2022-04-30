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
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../layout/footer.css">
    <link rel="stylesheet" href="../layout/fo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div id="header"></div>
    <?php
    include "../config/connect.php";
    echo "<pre>";
        $sql = "SELECT * FROM `products` WHERE `product-id` = " . $_GET['id'];
        $result = mysqli_query(new mysqli('localhost', 'root', '', 'noithat'), $sql);
        $product = mysqli_fetch_assoc($result);
    echo "</pre>";

    ?>
    <div class="warraper">
         <div class="container cart row">
        <div class="info-bill col-sm-8">
<?php
    $newarray = array();
    $_SESSION['products'] = $product;
    array_push($newarray,$_SESSION['products']);
    echo "<pre>";
    var_dump($newarray);
    echo "</pre>" 
?>
            <div class="detail-bill row">
                <div class="col-sm-5">
                    <img src="../asset/images/gordon.jpg" alt="">
                </div>
                <div class="col-sm-5">
                    <div class="cart-info-product">
                        <div class="info-name">
                            <h2>Đèn Tường Colton</h2>
                        </div>
                            <p>SKU: AZWL083</p>
                    <div class="properties-product">
                        <div class="brand-cart mt22">
                            <label>Thương hiệu</label>
                            <span>Hudson Valley</span>
                                </div>
                        <div class="quantity mt22">
                                <label>Số lượng</label>
                                <span>1</span>
                            </div>
                            <div class="price mt22">
                                <label>Giá</label>
                                <span>
                    <span class="woocommerce-Price-amount amount"><bdi>13.367.200&nbsp;<span class="woocommerce-Price-currencySymbol">VND</span></bdi></span></span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="detail-bill row">
                <div class="col-sm-5">
                    <img src="../asset/images/gordon.jpg" alt="">
                </div>
                <div class="col-sm-5">
                    <div class="cart-info-product">
                        <div class="info-name">
                            <h2>Đèn Tường Colton</h2>
                        </div>
                            <p>SKU: AZWL083</p>
                    <div class="properties-product">
                        <div class="brand-cart mt22">
                            <label>Thương hiệu</label>
                            <span>Hudson Valley</span>
                                </div>
                        <div class="quantity mt22">
                                <label>Số lượng</label>
                                <span>1</span>
                            </div>
                            <div class="price mt22">
                                <label>Giá</label>
                                <span>
                    <span class="woocommerce-Price-amount amount"><bdi>13.367.200&nbsp;<span class="woocommerce-Price-currencySymbol">VND</span></bdi></span></span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <a href="../home/home.php">Tiếp tục mua hàng</a>
            </div>
        </div>
        <div class="total-bill col-sm-4">
                <div class="total">
                    Tổng tiền<span class="float-right"><strong><span class="woocommerce-Price-amount amount"><bdi>13.367.200&nbsp;<span class="woocommerce-Price-currencySymbol">VND</span></bdi></span></strong> </span>
               
                <form action="">
                     <label class="info-customer">Thông tin khách hàng</label>
                <div class="input-group mb-3">
                    <input type="text" id="billing_last_name" class="form-control" placeholder="Họ và tên">
                </div>
                <div class="input-group mb-3">
                    <input type="text" id="billing_phone" class="form-control" placeholder="Số điện thoại">
                </div>
                <div class="input-group mb-3">
                    <input type="email" id="billing_email" class="form-control" placeholder="Email">
                </div>
                <div class="booking wc-proceed-to-checkout">
                    <button class="cvb btn-goto-checkout text-uppercase" type="button">Đặt hàng</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div id="footer"></div>
    <script src="../asset/js/common.js"></script>
</body>
</html>