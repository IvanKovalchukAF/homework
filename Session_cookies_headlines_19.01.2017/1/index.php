
<!--1)2Сделайте две страницы: index.php и hello.php.
При заходе на index.php
спросите с помощью формы имя пользователя,
запишите его в сессию.
При заходе на hello.php
поприветствуйте пользователя фразой "Привет, %Имя%!".-->

<form action="index.php" method="get">
    <input type="text" name="name"> <br><br>
    <input type="submit">
</form>

<?php
session_start();
if ($_GET['name']) {
    $_SESSION['name'] = $_GET['name'];
}

