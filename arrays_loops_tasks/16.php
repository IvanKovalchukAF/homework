<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach($arr as $value){
    echo $value;
    if($value==3 || $value==6){
        echo "<br>";
    }
}
