<?php
function evenElementsArray($a) {
    $arr = [];
    foreach ($a as $v) {
        if (($v > 0) && ($v % 2) == 0) {
            $arr[] = $v;
        }
    }
    return $arr;
}
