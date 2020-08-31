<?php
$areas = [
    'moscowArea' => [ //area
        'Moscow','Zelenograd','Klin'
    ],

    'leningradArea' => [
        'SntPetersburg','Vsevolzhsk','Pavlovks','Kronshtadt'
    ],

    'ryazanArea' => [
        'Shatsk','Kasimov','Pronsk','Sarai'
    ]
];

//$output = array_keys($areas);
//echo $output[0];

foreach ($areas as $area => $x) {
    $str = implode(', ',$x);
    echo "$area: $str <br>";
}

?>