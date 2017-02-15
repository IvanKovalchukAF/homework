<!--даны два файла, состоящие из предложений.
Создать третий файл, содержащий все предложения,
которые есть хотя бы в одном из файлов.
Повторы не добавлять в третий файл.-->
<?php
$file1 = "1.txt";
$file2 = "2.txt";
$file3 = "3.txt";

$getFile1 = file_get_contents($file1);
$getFile2 = file_get_contents($file2);

$explodeFile1 = explode('.', $getFile1);
$explodeFile2 = explode('.', $getFile2);


$arrayPlus = array_merge(array_flip($explodeFile1), array_flip($explodeFile2));


$result = implode("\r\n", array_flip($arrayPlus));
echo $result;
file_put_contents($file3, $result);
