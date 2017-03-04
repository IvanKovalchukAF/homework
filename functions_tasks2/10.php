<?php
function electroChain($a) {
    $col = func_num_args ($a);
    $result = 0;
    foreach ($a as $k => $v) {
        for($k = 0; $k < $col; $k++) {
            $result += $v;
        }
    }return $result;
}