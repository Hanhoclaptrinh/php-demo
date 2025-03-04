<!-- html documents -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="les9.php" method="post">
        <label for="">Country</label>
        <input type="text" name="country"> <br><br>
        <input type="submit" value="check">
    </form> <br>
</body>
</html>

<!-- php documents -->
<?php
    // associative array: mảng chứa cặp key-value (tương tự map)
    $capitals = array(
        "Vietnam" => "Hanoi",
        "USA" => "Washington DC",
        "China" => "Beijing",
        "India" => "New Delhi"
    );

    $cap = $capitals[$_POST["country"]]; // anh xa du lieu
    echo "Capital is {$cap}";


    // truy xuat gia tri thong qua key
    // echo $capitals["Vietnam"];

    // thay doi gia tri thong qua key
    // $capitals["Vietnam"] = "HCMC";

    // them vao mang
    // $capitals["Singapore"] = "Singapore";

    // lay ra phan tu cuoi cung
    // array_pop($capitals);

    // lay ra phan tu dau tien
    // array_shift($capitals);

    // lay ra key
    // $k = array_keys($capitals);
    // foreach ($k as $key) {
    //     echo "{$key} <br>";
    // }

    // lay ra value 
    // $v = array_values($capitals);
    // foreach ($v as $val) {
    //     echo "{$val} <br>";
    // }

    // flip: lay key lam val va val lam key
    // $capitals = array_flip($capitals);
    // foreach ($capitals as $key => $value) {
    //     echo "{$key} => {$value} <br>";
    // }

    // dao nguoc mang
    // $capitals = array_reverse($capitals);
    // foreach ($capitals as $key => $value) {
    //     echo "{$key} => {$value}";
    // }

    // kich thuoc mang
    // echo count($capitals);

    // xuat mang
    // foreach ($capitals as $key => $value) {
    //     echo "{$key} => {$value} <br>";
    // }


?>