<?php
if(isset($_GET['name'])) {
    $file = file_get_contents('../data/content' . DIRECTORY_SEPARATOR . $_GET['name']);
    if(isset($file)) {
        echo $file;
        ?><br><br>
        <a href="<?='../data/content' . DIRECTORY_SEPARATOR . $_GET['name']?>" download> download file </a>
<?php
    }else {
        echo 'ERROR 404';
    }
}
