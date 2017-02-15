<?php
define("FILE_NAME", "index.php");
?>
<h1>Заполнить форму</h1>
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
   Имя:<br> <input type="text" name="fname"><br>
   Фамилия:<br> <input type="text" name="lname"> <br><br>
   <input type="submit" value="Send!">
</form>
<?php
    if (isset($_POST['fname']) && !empty('fname')
     && isset($_POST['lname']) && !empty('lname')) {
        $fname = stripcslashes(trim(htmlspecialchars($_POST['fname'], ENT_QUOTES)));
        $lname = stripcslashes(trim(htmlspecialchars($_POST['lname'], ENT_QUOTES)));
        $strFile = $fname . ' ' . $lname . "\r\n";
        $f = fopen(FILE_NAME, 'a');
        if (is_resource($f)) {
            fputs($f, $strFile);
            fclose($f);
        }
        header('Location: ' . $_SERVER[PHP_SELF]);
        exit;
    }
