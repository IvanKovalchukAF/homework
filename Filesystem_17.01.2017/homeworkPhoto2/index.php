<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['myFiles']['error'] == 0) {
        $tmp = $_FILES['myFiles']['tmp_name'];
        $name = $_FILES['myFiles']['name'];
        mkdir(MyDir, 0777);
        if (is_dir(MyDir) && $_FILES['myFiles']['size'] < 1024) {
            $a = "MyDir/name";
            move_uploaded_file($tmp, $a);
        }
    }
}
?>
<form action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data" method="post">
    <input type="flle" name="myFile">
    <input type="submit" value="send file">
</form>
