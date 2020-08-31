<?php
$hours = date("H");
$minutes = date("i");
$str = "";
$strMin = "";

$digits = str_split($minutes);
$lastDigit = array_pop($digits);

if ($hours == 1 || $hours == 21) {
    $str = "час";
} elseif (($hours >= 2 && $hours <=4) || ($hours >= 22 && $hours <=24)){
    $str = "часа";
} else {
    $str = "часов";
}

if ($lastDigit == 1){
    $strMin = "минута";
} elseif ($lastDigit >=2 && $lastDigit <=4) {
    $strMin = "минуты";
} elseif ($lastDigit = 0 || $lastDigit>4) {
    $strMin = "минут";
}

echo "Точное время: $hours $str $minutes $strMin";