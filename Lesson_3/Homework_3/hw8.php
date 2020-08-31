<?php
header("Content-type: text/html; charset=UTF-8");


$areas = [
    'Московская Область' => [ //area
        'Москва', 'Зеленоград', 'Клин'
    ],

    'Ленинградская область' => [
        'Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт'
    ],

    'Рязанская область' => [
        'Шатск', 'Касимов', 'Пронск', 'Сараи'
    ]
];

foreach ($areas as $area => $cities) {
    echo "$area :<br>";
    foreach ($cities as $key => $city) {
        if(mb_substr($city, 0, 1, 'utf-8') == 'К'){
            echo "$city<br>";
        }
    }
    echo "<br>";
}
