<?php
$arr = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
$day = 2;
    foreach($arr as $k => $v){
        if($k == 1){
            echo "<i>$v <br></i>";
        }else{
            echo "$v <br>";
        }
    }