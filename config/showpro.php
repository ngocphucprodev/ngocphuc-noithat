<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ../asset/images/products/ -->
    <?php
        include "connect.php";
        
        foreach($result as $row) { ?>
            <img src="../asset/images/products/<?= $row['product-image'] ?>" />
            <p><?= $row['product-name'] ?></p>
            <span><?= $row['product-price'] ?></span>
            <pre ><?= var_dump($row) ?></pre>
            <?php } ?>
</body>
</html>