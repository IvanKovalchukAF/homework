<!--2)Создать сайт из четырех страниц.
На четвертой странице пользователь
видит список страниц, которые он посещал.
-->
<a href="index.php">page</a>
<a href="index2.php">page2</a>
<a href="index4.php">page4</a>
<?php
session_start();
if ($_SERVER['HTTP_REFERER']) {
    $_SESSION['visited_links'][] = $_SERVER['HTTP_REFERER'] . "<br>";
    echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">back</a>';
}
