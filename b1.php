<?php
$n =  12344432;
if ($n < 0) {
    echo  "Kho nha bro <br>";
} else {
    echo "Hop le<br>";
    $cnt = 0;
    $dem = strlen($n);
    echo "So {$n} co {$dem} chu so <br>";
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $cnt++;
        }
    }
    echo "So uoc cua {$n} la: {$cnt} <br>";
    # count(array_unique(str_split(strval($n))))
    echo "So luong chu so khac nhau cua so {$n} la: " . count(array_unique(str_split(strval($n))));
}
