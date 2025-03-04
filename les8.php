<?php
    // array
    $cars = array("bmw", "volvo", "mercedes", "audi");

    // change element
    // $cars[0] = "honda";

    // push: them vao cuoi mang
    // array_push($cars, "car5");
    
    // pop: lay phan tu cuoi cung
    // array_pop($cars);

    // shift: lay phan tu dau tien
    // array_shift($cars);

    // reverse: dao nguoc mang 
    // $cars = array_reverse($cars);

    // count: dem so luong phan tu mang
    // echo count($cars);

    foreach ($cars as $car) {
        echo $car . "<br>";
    }
?>