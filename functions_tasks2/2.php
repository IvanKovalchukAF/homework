<?php
function myInterest($a, $b) {
    if ($b > 0) {
        $arr = [];
        foreach ($a as $v) {
            $arrV = $v * $b;
            $arr [] .= $arrV;
        }return $arr;
    }return 'False';
}

$array = [12, 24, 0.25, 45];
echo '<pre>';
print_r(myInterest($array, 1.5));
echo '</pre>';