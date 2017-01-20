<?php
function comparison($a, $b, $c) {
    if ($a == $b && $b != $c ) {
        return "$c, $a, $b";
    }
    if ($b == $c && $a != $c) {
        return "$a, $b, $c";
    }
    if ($a == $c && $a != $b) {
        return "$b, $a, $c";
    }
}