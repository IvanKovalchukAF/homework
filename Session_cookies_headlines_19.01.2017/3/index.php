<!--3) Создать форму авторизации на сайте с тремя
обязательных полями: login, password и email.
Если данные введены верно,
то записать в cookies специальный ключ,
при наличии которого пользователю доступна кнопка  "Выход".
В момент выхода происходит удаление созданной ранее cookies.
-->

<?php
if (isset($_POST['log_out'])) {
    setcookie ("logged_in", "", time() - 3600);
    unset($_COOKIE['logged_in']);
}

$uLogin = 'user';
$uPassword = 777;
$uEmail = 'mail@gmail.com';

$login = $_POST['formLogin'];
$password = $_POST['formPassword'];
$email = $_POST['formEmail'];

if (($login == $uLogin) && ($password == $uPassword) && ($email == $uEmail)) {
    SetCookie('logged_in', true);
}

if (isset($_COOKIE['logged_in'])) {?>
    <form action="index.php" method="post">
        <input type="submit" name="log_out" value="выход">
    </form>
<?php } else { ?>
    <form action = "index.php" method = "post" >
        login <br >
    <input type = "text" name = "formLogin" required ><br >
    password<br >
    <input type = "password" name = "formPassword" required ><br >
    email <br >
    <input type = "email" name = "formEmail" required ><br >
    <input type = "submit" >
    </form >
<?php } ?>