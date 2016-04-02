<?php
/**
 * Created by PhpStorm.
 * User: Юля
 * Date: 02.04.2016
 * Time: 13:36
 */
function get_data () {
    return [5, 6, 7];
}

echo get_data()[1]."\n"; // значение будет =6
echo get_data()[2]."\n";

//ранее до php 5.4 делали так:
$data = get_data();
echo $data[1];

