<?php

function sum($a, $b){
    if(is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    }
    return "Неверные значения! Нужно ввести число";
}

function sub($a, $b){
    if(is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    }
    return "Неверные значения! Нужно ввести число";
}

function mul($a, $b){
    if(is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    }
    return "Неверные значения! Нужно ввести число";
}

function div($a, $b){
    if(is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    }
    return "Неверные значения! Нужно ввести число";
}
$res_sum = sum(1,2);
$res_sub = sub(3,4);
$res_mul = mul(5,6);
$res_div = div(7,8);
echo "$res_sum.<br>";
echo "$res_sub.<br>";
echo "$res_mul.<br>";
echo "$res_div.<br>";
?>

