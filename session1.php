<?php
session_start(); // khoi tao session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bai tap session 1</h1>
    <?php
        $_SESSION["name"] = "Han";
        $_SESSION["age"] = 21;
        echo "Khoi tao session thanh cong<br>";
    ?>
    <a href="test_ss1.php">Click here</a>
</body>
</html>