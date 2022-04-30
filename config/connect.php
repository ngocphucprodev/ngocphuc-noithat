<?php

// Kết nối CSDL
$conn = mysqli_connect('localhost', 'root', '', 'noithat');
 
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Câu SQL lấy danh sách
$sql = "SELECT * FROM products";
 
// Thực thi câu truy vấn và gán vào $result
$result = $conn->query($sql);
 
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả

// foreach($result as $row) {
//     echo '<strong>Per room amount:  </strong>'.$row['product-name'];
// }

 
// ngắt kết nối
// $conn->close();

?>