<!--7)Пользователь загружает текстовый файл со списком ссылок.
Добавить в базу (файл на сервере)
из этого файла только те ссылки,
которых нет ни в базе,
ни в файле с запрещенными ссылками.-->
<?php
$getLinks = file_get_contents('links.txt');
$getBase = file_get_contents('base.txt');
$blockLinks = file_get_contents('blockLinks.txt');
$arrLinks = explode(PHP_EOL, $getLinks);
$arrBase = explode(PHP_EOL, $getBase);
$arrBlock = explode(PHP_EOL, $blockLinks);

$arrMerge = array_merge($arrLinks, $arrBase, $arrBlock);
$arrResult = array_unique($arrMerge);
$strResult = implode('<br>', $arrResult);
$base = 'base.txt';
file_put_contents($base, $strResult);
echo $strResult;