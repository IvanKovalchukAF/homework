<?php
function triangle($a, $b, $c) {
    if($a > 0 && $b > 0 && $c > 0) {
        return 'Треугольник существует.';
    }
    return'Треугольник не существует.';
}