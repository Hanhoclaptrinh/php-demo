<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="les6.php" method="post">
        <label for="">Age</label>
        <input type="number" name="age" required placeholder="Enter your age"> <br> <br>
        <label for="">Income</label>
        <input type="text" name="income" required placeholder="Enter income (VND)"> <br> <br>
        <label for="">Bonus</label>
        <input type="text" name="bonus" required placeholder="Enter bonus (VND)"> <br> <br>
        <input type="submit" value="Check">
    </form> <br>
</body>
</html>

<?php
    // if else statement
    // $age = 0;
    // if ($age >= 18) {
    //     echo "Bro too old <br>";
    // } elseif ($age <= 0 || $age > 100) {
    //     echo "Really?? <br>";
    // }
    // else {
    //     echo "Bro too young <br>";
    // }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin từ form
    $age = $_POST["age"];
    $income = $_POST["income"];
    $bonus = $_POST["bonus"];

    // Biến điều kiện
    $hasJob = true;
    $tax_status = true;
    $tax = 0;
    $total = 0;

    // Kiểm tra độ tuổi và công việc
    if ($age >= 18 && $hasJob) {
        if ($income >= 3000000 && $income <= 5000000) {
            $tax = $income * 0.05;
        } elseif ($income > 5000000 && $income <= 10000000) {
            $tax = 240000 + ($income - 5000000) * 0.1;
        } elseif ($income > 10000000 && $income <= 18000000) {
            $tax = 750000 + ($income - 10000000) * 0.15;
        } elseif ($income > 18000000 && $income <= 32000000) {
            $tax = 1950000 + ($income - 18000000) * 0.2;
        } elseif ($income > 32000000 && $income <= 52000000) {
            $tax = 4750000 + ($income - 32000000) * 0.25;
        } elseif ($income > 52000000 && $income <= 80000000) {
            $tax = 9750000 + ($income - 52000000) * 0.3;
        } elseif ($income > 80000000) {
            $tax = 18150000 + ($income - 80000000) * 0.35;
        }

        // Tính thu nhập sau thuế
        $total = $income - $tax + $bonus;
        echo "Thu nhập sau thuế của bạn là: {$total} VND";
    } else {
        echo "Bạn phải đủ 18 tuổi và có công việc để tính thuế.";
    }
}
?>