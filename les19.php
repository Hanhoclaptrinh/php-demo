<!-- hashing -->
<?php
    // password hashing: bao ve mat khau nguoi dung
    // chuyen chuoi mat khau thanh chuoi ma hoa khong the dao nguoc
    $password = "hanle123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash . "<br>";

    if (password_verify("test123", $hash)) {
        echo "OK <br>";
    } else {
        echo "Cut ra ngoai <br>";
    }
?>  