<?php
function comparison($a) {
    if ($a > 0 && $a < 1000) {
        if($a > 0 && $a < 10 && ($a % 2) == 0) {
            return 'четное однозначное число';
        }
        if($a > 0 && $a < 10 && ($a % 2) != 0) {
            return '«нечетное однозначное число';
        }
        if($a >= 10 && $a < 100 && ($a % 2) == 0) {
            return 'четное двузначное число';
        }
        if($a >= 10 && $a < 100 && ($a % 2) != 0) {
            return 'нечетное двузначное число';
        }
        if($a >= 100 && $a < 1000 && ($a % 2) == 0) {
            return 'четное трехзначное число';
        }
        if($a >= 100 && $a < 1000 && ($a % 2) != 0) {
            return 'нечетное трехзначное число';
        }
    }
}
echo comparison(65);