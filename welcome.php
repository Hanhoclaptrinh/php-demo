<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_vippro.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng</title>
</head>
<body>
    <h1>Chào mừng, <?php echo $username; ?>!</h1>
    <a href="logout_vippro.php">Đăng xuất</a>
</body>
</html>