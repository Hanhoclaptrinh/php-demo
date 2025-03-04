<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="les4.php" method="post">
        <label for="">Username: </label> <br>
        <input type="text" name="username"> <br>

        <label for="">Password: </label> <br>
        <input type="password" name="password"> <br>

        <input type="submit" name="" value="Login">
    </form> -->

    <form action="les4.php" method="post">
        <label for="">Số lượng tín chỉ: </label>
        <input type="number" name="credit_quantity" required> <br><br>
        <input type="submit" value="Submit">
    </form> <br>
</body>

</html>

<?php
// get and post: gui du lieu tu mot form torng html den server
// get: gui qua url (hien thi trong thanh dia chi - khong an toan cho cac thong tin nhay cam nhu mat khau)
// post: gui trong body cua request (an khoi url - an toan doi voi cac thong tin nhay cam)
// echo "{$_GET["username"]} <br>"; // thong tin se bi xuat hien tren url (khong an toan)
// echo "{$_GET["password"]} <br>";
// echo "{$_POST["username"]} <br>"; // thong tin khong hien thi len url (an toan)
// echo "{$_POST["password"]} <br>";

$price = 450000; // giá tiền mỗi tín chỉ
// $credit = $_GET["credit_quantity"]; // lấy số lượng tín chỉ bằng get (sẽ hiển thị số lượng tín chỉ lên url)
$credit = $_POST["credit_quantity"]; // sử dụng post
$total = $price * $credit; // tổng tiền tín chỉ
echo "Tổng tiền phải thanh toán cho {$credit} tín chỉ là ". number_format($total, 0, ',', '.') ." VND <br>";
?>