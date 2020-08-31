<?php
//Реализовать функцию с тремя параметрами:
// function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation
// – строка с названием операции. В зависимости от переданного
// значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное
// значение (использовать switch).

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            $operation = $arg1 + $arg2;
            echo "Результат сложения: $operation .<br>";
            break;

        case "-":
            $operation = $arg1 - $arg2;
            echo "Результат вычитания: $operation.<br>";
            break;

        case "*":
            $operation = $arg1 * $arg2;
            echo "Результат умножения: $operation.<br>";
            break;

        case "/":
            if ($arg2 == 0) {
                echo("Делить на 0 нельзя");
            } else {
                $operation = $arg1 / $arg2;
                echo "Результат деления: $operation.<br>";
            }
            break;


    }
}

mathOperation(1,2,"+");
mathOperation(3,4,"-");
mathOperation(5,6,"*");
mathOperation(7,0,"/");

?>