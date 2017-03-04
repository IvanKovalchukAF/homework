<!--5) Запишите в сессию время захода пользователя на сайт.
При обновлении страницы выводите сколько
секунд назад пользователь зашел на сайт.-->

<?php
session_start();

if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}

echo time() - $_SESSION['start_time'];