<?php
function reshetoEra($n) {
    $arr = [];
    $arr[1] = 0;
    for($i = 2; $i <= $n; $i++) {
        $arr[$i] = 1;
    }
    for($i = 2; $i * $i <= $n; $i++) {
        if($arr[$i] == 1){
            for($k = $i * $i; $k <= $n; $k += $i){
                $arr[$k] = 0;
            }
        }
    }
    $result = 1;
    foreach($arr as $num => $k){
        if($k == 1){
            $result .= "<br>{$num}";
        }
    }
    return $result;
}
echo reshetoEra(50);
