<?php
function comparison($a, $b, $c) {
    if ($a == $b && $b != $c ) {
        return "$a, $b";
    }
    if ($b == $c && $a != $c) {
        return "$b, $c";
    }
    if ($a == $c && $a != $b) {
        return "$a, $c";
    }
    if ($a == $c && $c == $b) {
        return "$a, $b, $c";
    }
}