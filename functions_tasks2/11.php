<?php
function nearestNumber($a, $b) {
    $c = 10;
    $a1 = ($a - $c);
    $b1 = $b - $c;
    $a2 = abs($a1);
    $b2 = abs($b1);
    if ($a2 <= $b2) {
        return $a;
    }
    return $b;

}
echo nearestNumber(-6, 25);
