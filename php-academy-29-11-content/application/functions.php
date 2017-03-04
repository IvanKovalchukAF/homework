<?php
function tittle($a) {
    $arrA = explode('.', $a);
    foreach ($arrA as $k => $v) {
        if ($k == 0) {
            return $v;
        }
    }
}

function reducingFile($file) {
    $arrA = substr($file, 0, 75);
    return $arrA . '...';
}
