<?php
$someWords = file_get_contents('1.txt');

$words = explode(' ', $someWords);
sort($words);
$implodeStr = implode(' ', $words);
$result = file_put_contents('1.txt', $implodeStr);

var_dump($result);