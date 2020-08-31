<?php
function f($a)
{
    if ($a == 16) {
        return;
    }
    echo "$a<br>";
    f($a + 1);
}

f(7);
?>
