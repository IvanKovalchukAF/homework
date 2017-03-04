
<?php
$arr = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
$month = 12;
foreach ($arr as $months => $month){
    if($months == $month - 1){
        echo "<b>$month<br></b>";
    }else{
        echo "$month <br>";
    }
}
