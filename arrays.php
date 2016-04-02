<?php

$data = [1, 2, 3];
$cnt_data = count($data); //3

for ($i = 0; $i < $cnt_data; $i++) {

    echo $data[$i]."\n";

}


$data - [
    'a' => 1,
    'b' => 2,
    'c' => 3
];

$cnt_data = count($data); //3
echo 'Array length'.$cnt_data;

