<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="les10.php" method="post">
        <label for="">Username</label>
        <input type="text" name="uid"> <br><br>
        <label for="">Password</label>
        <input type="password" name="pass"> <br><br>
        <input type="submit" value="Check" name="log">
    </form>
</body>
</html>

<?php
    // isset va empty
    // isset: kiem tra xem mot bien co duoc khai bao va set gia tri khac null khong
    // empty: kiem tra xem mot bien co ton tai hay khong (neu ton tai thi bien do co phai la gia tri rong hay khong)

    // isset: return true neu mot bien duoc khai bao, co gia tri khac null
    // empty: return true neu mot bien chua duoc khai bao, co gia tri null

    // $name = "pitou code";
    // echo isset($name); // true

    // $a = null;
    // echo empty($a); // true

    // foreach ($_POST as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }

    if (isset($_POST["log"])) {
        $username = $_POST["uid"];
        $password = $_POST["pass"];
        if (empty($username)) {
            echo "Vui lòng thiết lập username <br>";
        }
        elseif (empty($password)) {
            echo "Vui lòng thiết lập mật khẩu <br>";
        }
        else {
            echo "Username: {$username} <br>";
            echo "Password: {$password} <br>";
        }
    } else {
        echo "Vui lòng điền đầy đủ thông tin <br>";
    }    
?>