<?php
    include("database.php");
    $conn = mysqli_connect($server, $username, $password, $database);

    // query string
    $sql = "select * from users";

    // thuc hien truy van DB
    $res = mysqli_query($conn, $sql);

    // kiem tra xem co ban ghi nao duoc tra ve tu truy van khong
    // msqli_num_rows: so luong ban ghi
    if (mysqli_num_rows($res) > 0) {
         while ($row = mysqli_fetch_assoc($res)) { // lay 1 ban ghi tu doi tuong duoi dang mang lien ket
        echo "id: " . $row["id"] . "<br>"; // tra ve thong tin tuong ung voi cac cot trong bang
        echo "user: " . $row["user"] . "<br>";
        echo "pass: " . $row["pass"] . "<br> <hr>"; }
    } else {
        echo "Khong tim thay doi tuong <br>";
    }

    mysqli_close($conn); // dong db sau khi hoan tat
?>