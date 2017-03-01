<!--6) Доработать 3-задачу таким образом,
чтобы при отсутствии авторизационной куки,
пользователя редиректило на файл login.php,
который рендерит форму и пытается авторизовать
пользователя(функционал по авторизации также перенести в этот файл)
-->

<?php
if (isset($_POST['log_out'])) {
    setcookie ("logged_in", "", time() - 3600);
    unset($_COOKIE['logged_in']);
}

if (isset($_COOKIE['logged_in'])) {?>
    <form action="index.php" method="post">
        <input type="submit" name="log_out" value="выход">
    </form>
<?php } else {
    header('Location: login.php');
} ?>