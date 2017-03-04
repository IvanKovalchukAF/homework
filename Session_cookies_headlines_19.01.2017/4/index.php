<!--4) Спросите у пользователя телефон с помощью формы.
Затем сделайте так, чтобы при повторном открытии страницы,
в форме (поля: имя, фамилия, телефон) поле телефон,
телефон были автоматически заполнены.-->
<?php
session_start();
if (!empty($_POST["phone"])) {
    $_SESSION["phone"] = $_POST["phone"];
}
?>
<form action="index.php" method="post">
    <label>Name</label><br>
    <input type="text" name="name"> <br>

    <label>Surname</label><br>
    <input type="text" name="surname"> <br>

    <label>phone</label><br>
    <input type="text" name="phone" value="<?= $_SESSION["phone"] ?>" >

    <input type="submit" value="send">
</form>
