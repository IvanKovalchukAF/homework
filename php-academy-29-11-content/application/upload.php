<?php
if (isset($_SESSION['auth'])) {?>
        <h2><p><b> Upload your file </b></p></h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="filename"><br>
            <input type="submit" value="Upload file"><br>
        </form>
<?php }



if (isset($_FILES['filename'])) {
    if(is_uploaded_file($_FILES["filename"]["tmp_name"])) {
        $file = dirname( __FILE__);
        // Если файл загружен успешно, перемещаем его
        // из временной директории в конечную
        move_uploaded_file($_FILES["filename"]["tmp_name"], $file . DIRECTORY_SEPARATOR .
            '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR. 'content' . DIRECTORY_SEPARATOR . $_FILES["filename"]["name"]);
    } else {
        echo("Error uploading");
    }
}

?>

