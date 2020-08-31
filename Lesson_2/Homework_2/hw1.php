<?php
function razn($a, $b){
    return $a - $b;
}

function mult($a, $b){
    return $a * $b;
}

function sum($a, $b){
    return $a + $b;
}

$a = -13;
$b = -8;

if ($a >= 0 && $b >0) {
    echo razn($a,$b);
} elseif ($a < 0 && $b < 0) {
    echo mult($a,$b);
} else {echo sum($a, $b);}

?>