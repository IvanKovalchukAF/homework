<?php
function trafficLights($t) {
    $a = ($t % 5);
    if($t > 0 && $t <= 5) {
        $a = $t;
    }
    if($a >= 0 && $a <= 3) {
        return 'зеленый';
    }
    if($a > 3 && $a <= 4) {
        return 'желтый';
    }
    return 'красный';
}
