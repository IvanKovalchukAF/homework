<?php
$age = 18;
if ($age >= 18 and $age <= 59){
    echo "Вам еще рабоать и работать";
}elseif ($age > 59){
    echo "Вам пора на пенсию";
}elseif ($age >=1 and $age <=17){
    echo "Вам рано работать";
}else {
    echo "Неизвестные возраст";
}

