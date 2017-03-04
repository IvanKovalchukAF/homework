<?php
function speedCar($S, $t) {
    $speed = $S / $t;
    $speedMS = ($S * 1000) / ($t * 3600);
    return "$speed км/ч". "<br>" ."$speedMS м/с";
}


echo speedCar(460, 6);