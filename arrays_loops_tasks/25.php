<?php
$arr = [];
for ($i = 0; $i <= 20; $i++){
    $arr[] = rand(0, 100);
}
echo'<pre>';
print_r($arr);
echo'</pre>';

$velMax = max($arr);
$velMin = min($arr);

$keyMax = array_search($velMax, $arr);
$keyMin = array_search($velMin, $arr);

$arr[$keyMax] = $velMin;
$arr[$keyMin] = $velMax;

echo'<pre>';
print_r($arr);
echo'</pre>';
