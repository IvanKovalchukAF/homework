<?php
function  numberNoun($a) {
    if($a == 1) {
        return $a . ' яблоко';
    }
    if($a >= 2 && $a <= 4) {
        return $a . ' яблока';
    }
    if($a > 4) {
        return $a . ' яблок';
    }
}

