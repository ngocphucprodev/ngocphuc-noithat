<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    
<h1>A Fancy Table</h1>

<table id="customers">
<?php
    include "../../config/connect.php";
    $sql = "SELECT telephone,email,username,userid FROM users";
    $result = $conn->query($sql);
?>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
    <th>Email</th>
  </tr>
  <?php
  foreach($result as $row){ ?>
    <tr>
        <td><?= $row['userid'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['telephone'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><a href="delete.php?<?='id=' .$row['userid']?>">Xoá</a></td>
  </tr>
 <?php } ?>
 
</table>
</body>
</html>