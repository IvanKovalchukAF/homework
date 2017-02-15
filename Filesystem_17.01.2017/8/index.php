<!--8)Счетчик посещений: Присвоить переменной $access имя файла,
    в котором будет храниться значение счетчика.
Использовать функцию filе( ) для чтения содержимого $access в массив $visits.
    Присвоить переменной $current_visitors значение первого
    (и единственного) элемента массива $visits.
Увеличить значение $current_visitors на 1.
    Открыть файл $access для записи и установить указатель текущей позиции в начало файла.
Записать значение $current_visitors в файл $access.
    Закрыть манипулятор, ссылающийся на файл $access.-->
<?php
$access = 'visits.txt';
$visits = file($access);
foreach ($visits as $current_visitors) {
    $visits = $current_visitors + 1;
}
$access1 = fopen($access, 'w');
fwrite($access1, $visits);
fclose($access1);
