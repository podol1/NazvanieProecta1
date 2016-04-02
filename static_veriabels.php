<?php
function test()
{
    static $count = 0;

    $count++;
    return $count;
}

        echo test();
        echo test();
        echo test();
