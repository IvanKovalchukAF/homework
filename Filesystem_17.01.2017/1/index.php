<?php
/*array_diff*/
/*array_count_values
Даны два файлы со словами, разделенными пробелами.
Создать новый файл, содержащий:
а) слова, которые встречаются только в первом файле;
б) слова, которые встречаются в обоих файлах;
в) слова, которые встречаются в каждом файле более двух раз.*/
$file1 = "1.txt";
$file2 = "2.txt";
$file3 = "3.txt";
$current1 = file_get_contents($file1);
$current2 = file_get_contents($file2);
$fileArray1 = explode(' ', $current1);
$fileArray2 = explode(' ', $current2);

$differentWords = '';

foreach ($fileArray1 as $v1) {
    $found = false;
    foreach ($fileArray2 as $v2) {
        if ($v1 == $v2) {
            $found = true;
        }
    }
    if(!$found) {
        $differentWords .= $v1 . ' ';
    }
}

$a = $differentWords . " \r\n - different words \r\n ";
$sameWordsArr = [];

foreach ($fileArray1 as $v1) {
    foreach ($fileArray2 as $v2) {
        if ($v1 == $v2) {
            $sameWordsArr[$v1] = $v1;
        }
    }
}
$sameWords = implode(' ', $sameWordsArr);
$b = $sameWords . "\r\n  - same words \r\n ";

// start file 3
$resultCount1 = [];
$arr_count1 = array_count_values($fileArray1);

foreach($arr_count1 as $kCount1 => $vCount1) {
    if($vCount1 > 2) {
        $resultCount1[] = $kCount1;
    }
}


$resultCount2 = [];

$arr_count2 = array_count_values($fileArray2);

foreach($arr_count2 as $kCount2 => $vCount2) {
    if($vCount2 > 2) {
        $resultCount2[] = $kCount2;
    }
}

$resultArr = array_intersect($resultCount1, $resultCount2);

$result = implode(' ', $resultArr);
$c = $result . "\r\n  - the words are repeated in two files more then two times \r\n ";

$fp = fopen('3.txt', 'w');
fwrite($fp, $a);
fwrite($fp, $b);
fwrite($fp, $c);
fclose($fp);



