<?php
$result = 0;
$str = [26, 17, 136, 12, 79, 15];
    foreach ($str as $value){
    $value = ($value * $value);
    $result += $value;
}
echo $result;