<?php
$result = 1;
$arr = [];
for($i = 0; $i <= 20; $i++) {
    $arr[] = rand(0, 100);
    }
foreach($arr as $k => $v) {
    if($k % 2 == 0 && $k > 0) {
        $result = $result * $v;
    }
    if($k %2 != 0 && $k > 0) {
        echo $v . '<br>';
    }
}

