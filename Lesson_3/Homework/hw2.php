<?php
$n = 0;
do {
    if ($n == 0) {
        echo "$n - ноль <br>";
    } elseif ($n%2 == 0) {
        echo "$n - чётное число <br>";
    } else echo "$n - нечётное число <br>";
    $n++;
} while ($n <= 10);
?>