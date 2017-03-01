<!--2)Создать сайт из четырех страниц.
На четвертой странице пользователь
видит список страниц, которые он посещал.
-->
<?php
session_start();
if ($_SERVER['HTTP_REFERER']) {
    $_SESSION['visited_links'][] = $_SERVER['HTTP_REFERER'] . "<br>";
    echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">back</a>';
}
echo 'You have been on:' . "<br>";
if (isset($_SESSION['visited_links'])) {
    foreach ($_SESSION['visited_links'] as $link) {
        $linkArr = explode('/', $link);
        echo array_pop($linkArr);
    }
}
