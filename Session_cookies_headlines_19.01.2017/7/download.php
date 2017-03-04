<?php

if (isset($_GET['file_name'])) {
    $uploadDir = dirname(__FILE__) . '/uploads/';
    $filePath = $uploadDir . $_GET['file_name'];
    if (file_exists($filePath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: image/jpg');
        header('Content-Disposition: attachment; filename="'. basename($filePath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        include_once "include.php";
        exit;
    }
}
$path = "uploads/";
$openDir = scandir($path);
foreach ($openDir as $value) {
    if ($value == '.' || $value == '..' ) {
        continue;
    } else {?>
        <a href="download.php?file_name=<?php echo $value; ?>" download><?php echo 'download ' . $value ?></a> <br>
        <br/>
        <?php
    }
}