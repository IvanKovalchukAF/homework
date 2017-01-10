<?php
function dataDifference($a, $b) {
    $d1 = new DateTime($a);
    $d2 = new DateTime($b);
    $diff = $d2->diff($d1);
    return $diff;
}
$a = "2011-07-08 11:14:15";
$b = "2014-06-08 21:13:15";
echo "<pre>";
print_r (dataDifference($a, $b));
echo "</pre>";
