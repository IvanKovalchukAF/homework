<?php
function myeQuationSqrt($a, $b, $c) {
    $discriminate = sqrt(($b * $b) - (4 * $a *$c));

    if($a > 0 && $discriminate > 0) {
        $x1 = ($b + $discriminate)/(2 * $a);
        $x2 = ($b - $discriminate)/(2 * $a);
        return array($x1, $x2);
    }
    return 'ERROR';
}