<?php
$numb = 3;
$res = 0;
$string = '273635932348';
$arr = str_split ($string);
    foreach ($arr as $k => $v){
        if ($v == $numb){
            $res++;
        }
    }
echo $res;

/*$res = 0;
$numb = 2;
$string = '273635932348';
$cnt = strlen($string);
    for($i = 0; $i < $cnt; $i++){
        if($string[$i] == $numb){
            $res++;
        }
    }
echo $res;*/


