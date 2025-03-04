<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="les5.php" method="post">
        <label for="">X: </label> <br>
        <input type="text" name="x"> <br>

        <label for="">Y: </label> <br>
        <input type="text" name="y"> <br>

        <label for="">Z: </label> <br>
        <input type="text" name="z"> <br>

        <input type="submit" value="Show">
    </form> -->

    <!-- tinh chu vi ban kinh hinh tron  -->
     <form action="les5.php" method="post">
        <label for="">Radius: </label>
        <input type="text" name="radius" required id="radius"> <br> <br>
        <input type="submit" value="Check">
     </form> <br>
</body>
</html>

<!-- php document  -->
<?php
    // các hàm toán học: pow, abs, sqrt, ...
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;

    // $total = abs($x); // gia tri tuyet doi
    // $total = round($x); // lam tron
    // $total = floor($x); // lam tron xuong
    // $total = ceil($x); // lam tron len
    // $total = pow($x, $y); // luy thua
    // $total = sqrt($x); // can bac hai
    // $total = max($x, $y, $z); // gia tri lon nhat
    // $total = min($x, $y, $z); // gia tri nho nhat
    // $total = pi(); // pi
    // $total = rand(); // ngau nhien (rand(1, 100): ngau nhien tu 1 toi 100)
    // echo $total;

    $radius = $_POST["radius"];
    $circumference = 2 * $radius * pi(); // tinh chu vi hinh tron
    $area = pow($radius, 2) * pi(); // tinh dien tich hinh tron
    echo "Circumference: ".round($circumference, 2)." cm<br>";
    echo "Area: ".round($area, 2)." cm²<br>";
?>