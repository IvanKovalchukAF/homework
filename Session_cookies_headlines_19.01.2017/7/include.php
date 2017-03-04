<?php
$staticsTxt = 'statics.txt';
$imageName = $_GET['file_name'];
$fileContent = file_get_contents($staticsTxt);
$stats = unserialize($fileContent);
if (empty($fileContent) || !is_array($stats)) {
    $stats = [];
    $stats[] = ['filename' => $imageName, 'downloadCount' => 1];
    $serialize = serialize($stats);
    file_put_contents($staticsTxt, $serialize);
} elseif (is_array($stats)) {
    $found = false;
    foreach ($stats as $k => $v) {
        foreach ($v as $key => $value) {
            if ($value == $imageName && $key == 'filename') {
                $stats[$k]['downloadCount'] +=1;
                $found = true;
                break;
            }
        }
    }
    if (!$found) {
        $stats[] = ['filename' => $imageName, 'downloadCount' => 1];
    }
    $serialize = serialize($stats);
    file_put_contents($staticsTxt, $serialize);
}