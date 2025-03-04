<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="les7.php" method="post">

    <label for="">X:</label>
    <input type="number" name="count"> <br><br>
    <input type="submit" value="Start">
    </form> <br>
</body>
</html>
<?php
    // for loop
    $cnt = $_POST["count"];
    for ($i = $cnt; $i >= 1; $i--) {
        echo $i . ". Pitou Code <br>";
    }
?>