<?php
function myYear($a) {
    if($a == 2000 ) {
        return 366;
    }
    if((($a % 4) == 0 && ($a % 100 != 0)) || ($a % 400) == 0) {
        return 366;
    }
    return 365;
}