<!--5)Написать функцию,
которая будет показывать список всех файлов в данной папке
(поиск файлов происходит и во всех вложенных уровнях).-->
<?php
function get_files($dir) {
    $openDir = scandir($dir);
    $arrFiles = [];
    foreach ($openDir as $value) {
        if ($value == '.' || $value == '..') {
            continue;
        }
        if (is_dir("$dir/$value")) {
            $arrFiles = array_merge(get_files("$dir/$value"), $arrFiles);
        } else {
            $arrFiles[] = $value;
        }
    }
     return $arrFiles;
}

$path = "./";

echo '<pre>';
print_r(get_files($path));
echo '</pre>';