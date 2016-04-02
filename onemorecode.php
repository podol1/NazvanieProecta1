<?php
//рекурсия
function recursion_func($v) {
    if ($v == 0) {
        return null;
    }
    echo $v;

    $v--; // $v = $v - 1;
    recursion_func($v);
}

recursion_func(3);