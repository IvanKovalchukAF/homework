<?php
function isLeap($year) {
    if(($year % 400) == 0 || ($year % 100)!= 0 && ($year % 4) == 0) {
        return 'Високосный';
    }
    return 'Не високосный';
}
