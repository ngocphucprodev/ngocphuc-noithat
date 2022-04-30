<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Updating</h1>
    <?php
    include "../../config/connect.php";
    $sql = "DELETE FROM users WHERE userid = " . $_GET['id'];
    $result = mysqli_query($conn,$sql);
    var_dump($_GET);
    echo $sql;
    ?>
</body>
</html>