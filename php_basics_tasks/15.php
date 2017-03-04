<?php
$a = 200;
$b = 0;
$operator = "/";

if ($operator == "*"){
    echo $a * $b;
} elseif ($operator == "/"){
    if($b <= 0){
        echo "на 0 делить нельзя";
    } else {
        echo $a / $b;
    }
} elseif ($operator == "+"){
        echo $a + $b;
} elseif ($operator == "-"){
        echo $a - $b;
} elseif ($operator == "%"){
        echo $a % $b;
}

