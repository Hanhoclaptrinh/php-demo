<!-- function  -->
 <?php
    function hpbd($name) {
        echo "Happy birthday to {$name}";
    } 

    function add($a, $b) {
        return $a + $b;
    }

    function hypotenuse($a, $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    hpbd("Pitou<br>");
    echo add(4, 5) . "<br>";
    echo hypotenuse(6, 8);
 ?>