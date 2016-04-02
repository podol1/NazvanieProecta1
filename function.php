<?php
function buy_bear_with_not_requiered_arg($color = 'red') {
    $result = null;
    if ($color == 'red') {
        $result = 1;
    } elseif ($color == 'green') {
        $result = 2;
    }
    return $result;
}

echo buy_bear_with_not_requiered_arg(); //1
echo buy_bear_with_return($color='red'); //1
echo buy_bear_with_not_requiered_arg($color='red'); //1

//

function buy_bear_ex_args ($color, $color_hand = 'red') {
    return $color.$color_hand;
}

echo buy_bear_ex_args('grey', $color_hand='red');

//Global vars

$var = 1;

function test_global_var () {
    echo $var; //error
}

function test_global_var_2(){
    global $var;
    $var = $var +1;
    return $var;
}

echo test_global_var_2();