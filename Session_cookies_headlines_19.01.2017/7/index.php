<!--7) Продолжение задачи 6 - дать авторизованному пользователю
возможность загрузить картинку(jpg, до 3 Мб),
на отдельной странице выводить список из всех
картинок с ссылкой на скачивание,
скачивание организовать через отдельный файл download.php,
который венет все необходимые заголовки для скачивания выбранного файла,
а также запишет в файл со статистикой данные в сериализованном формате:-->

<!--/*$stats = [
    ['filename' => 'file.jpg', 'downloadCount' => 1],
    ['filename' => 'file2.jpg', 'downloadCount' => 7],
];
*/-->
<!--если имя файла совпадает хоть с одним
из файлов из массива со статистикой -
увеличить счетчик скачиваний,
и записать структуру снова в файл.-->

<?php
if (isset($_POST['log_out'])) {
    setcookie ("logged_in", "", time() - 3600);
    unset($_COOKIE['logged_in']);
}

if (isset($_COOKIE['logged_in'])) {?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="userfile" value="userfile">
        <input type="submit" value="Send image">
    </form>
    <form action="index.php" method="post">
        <input type="submit" name="log_out" value="выход">
    </form>

<?php } else {
    header('Location: login.php');
}

$max_image_size = 3 * 1024 * 1024;
$valid_types = array("gif","jpg", "png", "jpeg");
$basePath = dirname(__FILE__);
$uploaddir = $basePath . '/uploads/';
if (isset($_FILES["userfile"])) {
    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        $filename = $_FILES['userfile']['tmp_name'];
        $ext = substr($_FILES['userfile']['name'],
            1 + strrpos($_FILES['userfile']['name'], "."));
        if (filesize($filename) > $max_image_size) {
            echo 'Error: File size > 3 mb.';
        } elseif (!in_array($ext, $valid_types)) {
            echo 'Error: Invalid file type.';
        } else {
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $_FILES['userfile']['name'])) {
                    echo 'File successful uploaded.';
                } else {
                    echo 'Error: moving fie failed.';
                }
        }
    } else {
        echo "Error: empty file.";
    }
}
?><a href="download.php">Your upload images</a>
<?php
