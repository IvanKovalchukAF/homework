<?php
$arr = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
foreach($arr as $week => $day){
    if ($week <= 4){
        echo "$day <br>";
    }else{
        echo "<b>$day <br></b>";
    }
}