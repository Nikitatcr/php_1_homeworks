<?php

function power($val, $pow) {
    if ($pow == 0) { // если индекс степени равен 0
        return 1;
    }
    if ($pow < 0) { // если индекс степени меньше 0
        return power(1/$val, -$pow);
    }
    return  $val * power($val, $pow-1); //во всех остальных случаях
}

echo power(5,2);

?>