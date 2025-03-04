<?php
session_start();

if (isset($_COOKIE['uid']) && isset($_COOKIE['pass'])) {
    $_SESSION['username'] = $_COOKIE['uid'];
    header("Location: welcome.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "123456") {
        $_SESSION['username'] = $username;

        if (isset($_POST["remember"])) {
            setcookie("uid", $username, time() + (86400 * 30), "/");
            setcookie("pass", $password, time() + (86400 * 30), "/");
        }

        header("Location: welcome.php");
        exit();
    } else {
        $error = "Đăng nhập thất bại!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
    <form method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="checkbox" name="remember"> Nhớ đăng nhập<br><br>
        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>