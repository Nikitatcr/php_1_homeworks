<?php

function addUnderscoreInsteadOfaSpace($str){
    $array = explode(' ', $str);
    $newstr = implode('_', $array);
    echo $newstr;
}

addUnderscoreInsteadOfaSpace("Привет, как твои дела?");

?>
