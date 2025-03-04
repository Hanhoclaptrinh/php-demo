<!-- cookie -->
<?php
    // tao cookie co key = fav-food, value = pizza, cookie het han trong 2 ngay va duong dan cua cookie
    setcookie("fav-food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav-drink", "milk", time() + (86400 * 3), "/");
    setcookie("fav-dessert", "bingqiling", time() + (86400 * 4), "/");

    // foreach ($_COOKIE as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }

    if (isset($_COOKIE["fav-food"])){
        echo "Buy some {$_COOKIE["fav-food"]} <br>";
    } else {
        echo "An gi cung duoc <br>";
    }
?>