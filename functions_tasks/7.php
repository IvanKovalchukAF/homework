<?php
function getMonth($a) {
    $months = [
        '01' => 'Января',
        '02' => 'Февраля',
        '03' => 'Марта',
        '04' => 'Апреля',
        '05' => 'Мая',
        '06' => 'Июня',
        '07' => 'Июля',
        '08' => 'Августа',
        '09' => 'Сентября',
        '10' => 'Октября',
        '11' => 'НоябрьНоября',
        '12' => 'Декабря'
    ];
    return $months[$a];
}
function getDayOfWeek($a) {
    $week = [
        1 => 'понедельник',
        2 => 'вторник',
        3 => 'среда',
        4 => 'четверг',
        5 => 'пятница',
        6 => 'суббота',
        7 => 'воскресение',
    ];
    return $week[$a];
}

$dayOfMonth = date("j");
$month = getMonth(date("m"));
$weekDay = getDayOfWeek(date("N"));

echo $dayOfMonth . ' ' . $month. ', ' . $weekDay;