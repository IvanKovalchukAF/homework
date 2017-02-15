<!--4)Дан файл. Каждая строка содержит имя, пароль и email,
разделенные символами ':' (двоеточие).
Удалить строки с повторами email.
Удалить строки, в которых имена совпадают.-->
<?php

$getFile = file_get_contents('1.txt');
$expInside = [];
$explode = explode(PHP_EOL, $getFile);
foreach ($explode as $key => $value) {
    if($value) {
        $expInside[] = explode(':', $value);
    }
}
$mail = [];
foreach ($expInside as $key => $val) {
    foreach ($val as $k => $v) {
        if ($k == 2) {
            if (!in_array($v, $mail)) {
                $mail[] = $v;
            } else {
                unset($expInside[$key]);
            }
        }

    }
}

$name = [];
foreach ($expInside as $key => $val) {
    foreach ($val as $k => $v) {
        if ($k == 0) {
            if (!in_array($v, $name)) {
                $name[] = $v;
            } else {
                unset($expInside[$key]);
            }
        }

    }
}
$arrResult = [];
foreach ($expInside as $value) {
    $arrResult[] = implode(":", $value);
}

file_put_contents('1.txt', implode(PHP_EOL, $arrResult));
