<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2</title>
</head>
<body>
    <form action="b2.php" method="post">
        <label for="">Username: </label><br>
        <input type="text" name="username" required><br>
        <input type="submit" value="check">
    </form>
</body>
</html>

<?php
    $per_name = "LVH";
    $name = $_POST['username'];
    if ($name === $per_name) {
        echo "Bro trung ten <br>";
    } else {
        echo "Hello " . $name . "<br>";
    }
?>