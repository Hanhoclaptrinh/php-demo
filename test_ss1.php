<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang test session 1</h1>
    <?php
        echo "Xin chao ".$_SESSION["name"]."<br>";
        echo $_SESSION["name"]." nam nay ".$_SESSION["age"]." tuoi<br>";
    ?>
    <a href="update_ss1.php">Click here</a>
</body>
</html>