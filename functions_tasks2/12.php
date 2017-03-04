<?php
function checkInterval($a) {
    if($a >= 50 && $a <= 100) {
        return 'Число а содержится в интервале.';
    }return 'Число а не содержится в интервале.';
}