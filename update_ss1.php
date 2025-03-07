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
    <h1>Update giá trị session 1</h1>
    <?php
        $_SESSION["name"] = 'Pitou Code Ngu';
        $_SESSION["age"] = 35;
        echo "Giá trị session 1 đã được cập nhật thành: ". $_SESSION["name"]." và ".$_SESSION["age"]." tuoi<br>";
    ?>
    <a href="test_ss1.php">Click quay về trang trước (sau khi cập nhật giá trị)</a>
</body>
</html>