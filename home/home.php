<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../layout/footer.css">
    <link rel="stylesheet" href="../layout/fo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="main">
    <div id="header"></div>
    <div class="banner">
        <div class="hero-slider">
            <img src="../asset/images/banner1.jpg" alt="">
        </div>
    </div>
    <div class="products">
        <div class="container">
            <div class="product-list">
                <?php
                    include "../config/connect.php";

                    foreach($result as $row) { ?>
                            <div class="product-list-item col-sm-4">
                                <a href="../detail/detail.php?<?='id='.$row['product-id'] ?>">
                                <img src="../asset/images/products/<?= $row['product-image'] ?>" />
                                    <div class="overlay-icon">
                                        <img src="../asset/images/icons/cart.svg" alt="">
                                        <img src="../asset/images/icons/like.png" alt="">
                                    </div>
                                </a>
                                <div class="img-hover">
                                    <div class="card-body">
                                        <p>Hudson Valley</p>
                                        <h5 class="card-title"><a href="https://azhome.co/product/den-tran-burdett/" class="cvb" title="Đèn Trần Burdett"><?= $row['product-name'] ?></a>
                                        </h5>
                                        <div class="product_foot">
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><?= $row['product-price'] ?>&nbsp;<span class="woocommerce-Price-currencySymbol">VND</span></bdi></span> – <span class="woocommerce-Price-amount amount"><bdi>60.044.600&nbsp;<span class="woocommerce-Price-currencySymbol">VND</span></bdi></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
            </div>
          
            <!-- <div class="product-list">
                <div class="product-list-item">
                    <a href="#">
                        <img src="../asset/images/products/pro2.jpg" alt="" srcset="">
                    </a>
                    <div class="img-hover">
                        <h3>AZ HOME LIVING KIEN GIANG</h3>
                        <p class="default_hide">TM3, 3/2 Street, Phu Cuong Urban Area, An Hoa Ward, Rach Gia City</p>
                        <p class="default_hide"><a href="mailto:cs@azhome.co" title="cs@azhome.co">cs@azhome.co</a></p>
                        <p class="default_hide"><a href="tel:02973 81 81 81" title="02973 81 81 81">02973 81 81 81</a></p>
                        <p><a href="https://goo.gl/maps/uMi1ZGVTL98zjd4N7" target="_blank" class="read_more">GOOGLE MAP</a></p>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="#">
                        <img src="../asset/images/products/gordon.jpg" alt="" srcset="">
                    </a>
                    <div class="img-hover">
                        <h3>AZ HOME LIVING KIEN GIANG</h3>
                        <p class="default_hide">TM3, 3/2 Street, Phu Cuong Urban Area, An Hoa Ward, Rach Gia City</p>
                        <p class="default_hide"><a href="mailto:cs@azhome.co" title="cs@azhome.co">cs@azhome.co</a></p>
                        <p class="default_hide"><a href="tel:02973 81 81 81" title="02973 81 81 81">02973 81 81 81</a></p>
                        <p><a href="https://goo.gl/maps/uMi1ZGVTL98zjd4N7" target="_blank" class="read_more">GOOGLE MAP</a></p>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="#">
                        <img src="../asset/images/products/pro1.png" alt="" srcset="">
                    </a>
                    <div class="img-hover">
                        <h3>AZ HOME LIVING KIEN GIANG</h3>
                        <p class="default_hide">TM3, 3/2 Street, Phu Cuong Urban Area, An Hoa Ward, Rach Gia City</p>
                        <p class="default_hide"><a href="mailto:cs@azhome.co" title="cs@azhome.co">cs@azhome.co</a></p>
                        <p class="default_hide"><a href="tel:02973 81 81 81" title="02973 81 81 81">02973 81 81 81</a></p>
                        <p><a href="https://goo.gl/maps/uMi1ZGVTL98zjd4N7" target="_blank" class="read_more">GOOGLE MAP</a></p>
                    </div>
                </div>
            </div>
            <div class="product-list">
                <div class="product-list-item">
                    <a href="#">
                        <img src="../asset/images/products/pro2.jpg" alt="" srcset="">
                    </a>
                    <div class="img-hover">
                        <h3>AZ HOME LIVING KIEN GIANG</h3>
                        <p class="default_hide">TM3, 3/2 Street, Phu Cuong Urban Area, An Hoa Ward, Rach Gia City</p>
                        <p class="default_hide"><a href="mailto:cs@azhome.co" title="cs@azhome.co">cs@azhome.co</a></p>
                        <p class="default_hide"><a href="tel:02973 81 81 81" title="02973 81 81 81">02973 81 81 81</a></p>
                        <p><a href="https://goo.gl/maps/uMi1ZGVTL98zjd4N7" target="_blank" class="read_more">GOOGLE MAP</a></p>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="#">
                        <img src="../asset/images/products/pro2.jpg" alt="" srcset="">
                    </a>
                    <div class="img-hover">
                        <h3>AZ HOME LIVING KIEN GIANG</h3>
                        <p class="default_hide">TM3, 3/2 Street, Phu Cuong Urban Area, An Hoa Ward, Rach Gia City</p>
                        <p class="default_hide"><a href="mailto:cs@azhome.co" title="cs@azhome.co">cs@azhome.co</a></p>
                        <p class="default_hide"><a href="tel:02973 81 81 81" title="02973 81 81 81">02973 81 81 81</a></p>
                        <p><a href="https://goo.gl/maps/uMi1ZGVTL98zjd4N7" target="_blank" class="read_more">GOOGLE MAP</a></p>
                    </div>
                </div>
                <div class="product-list-item">
                    <a href="#">
                        <img src="../asset/images/products/gordon.jpg" alt="" srcset="">
                    </a>
                    <div class="img-hover">
                        <h3>AZ HOME LIVING KIEN GIANG</h3>
                        <p class="default_hide">TM3, 3/2 Street, Phu Cuong Urban Area, An Hoa Ward, Rach Gia City</p>
                        <p class="default_hide"><a href="mailto:cs@azhome.co" title="cs@azhome.co">cs@azhome.co</a></p>
                        <p class="default_hide"><a href="tel:02973 81 81 81" title="02973 81 81 81">02973 81 81 81</a></p>
                        <p><a href="https://goo.gl/maps/uMi1ZGVTL98zjd4N7" target="_blank" class="read_more">GOOGLE MAP</a></p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div id="footer"></div>
    </div>
    <script src="../asset/js/common.js"></script>
</body>
</html>