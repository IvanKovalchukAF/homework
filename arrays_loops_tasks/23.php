<?php
$string = '2736592348';
$arr = str_split($string);
    foreach ($arr as $k => $v){
        echo array_sum($arr);
        break;
    }
