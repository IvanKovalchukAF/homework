<?php
function strN($str, $n) {
    $FinSt = mb_substr($str, 0, $n);
    return $FinSt . '...';
}
