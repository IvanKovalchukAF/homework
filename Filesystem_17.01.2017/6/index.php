<style type="text/css">
    body {
        font-size: 15px;
        font-family: Arial;
        word-spacing: 3px;
    }
    div {
        width:500px;
    }

</style>
<!--6)Пользователю предлагается ввести имя каталога в локальной файловой системе сервера.
	Сценарий PHP выводит содержимое этого каталога в следующем формате:
	    --пиктограмма, указывающая на тип файла,
	    --имя файла,
	    --размер (или специальная пометка, если файл является каталогом),
	    --дата и время последней модификации.-->
<div>
<?php
function get_files($dir) {
    $openDir = scandir($dir);
    $arrFiles = [];
    function type_file($a) {
        $fileType = end(explode('.', $a));
        if ($fileType == 'pdf') {
            return "<img src='pdf-icon.jpg' width='20' height='20'> </img>";
        }
        if ($fileType == 'txt') {
            return "<img src='txt-icon.jpg' width='20' height='20'> </img>";
        }
        if ($fileType == 'jpg') {
            return "<img src='jpg-icon.jpg' width='20' height='20'> </img>";
        }
        if ($fileType == 'php') {
            return "<img src='php-icon.png' width='20' height='20'> </img>";
        }
        if ($fileType == 'png') {
            return "<img src='png-icon.jpg' width='20' height='20'> </img>";
        }
        else return 'type=?';
    }
    foreach ($openDir as $value) {
        echo '<ul>';
        if ($value == '.' || $value == '..' || $value == 'index.php' || $value == 'icon') {
            continue;
        }

        if (is_dir($value)) {
            echo "<img src='folder-icon.png' width='20' height='20'> </img>" . $value .
                '; This is Directory' . date ("F d Y H:i:s.", filemtime($value)) . '; directory was changed: ' . '<br>';
        }
        else {
            echo type_file($value) . $value . '; Size of file: ' . filesize($value) .
                ' bytes.' . '; file was changed: ' . date ("F d Y H:i:s.", filemtime($value)) .'<br>';
        }
        echo '</ul>';
    }
     return $arrFiles;
}

$path = "./";
$get_files = (get_files($path));
?>
</div>