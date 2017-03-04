<?php

$uLogin = 'user';
$uPassword = 777;
$uEmail = 'mail@gmail.com';

$login = $_POST['formLogin'];
$password = $_POST['formPassword'];
$email = $_POST['formEmail'];

if (($login == $uLogin) && ($password == $uPassword) && ($email == $uEmail)) {
    SetCookie('logged_in', true);
    header('Location: index.php');
}
?>

<form action = "login.php" method = "post" >
    login <br >
    <input type = "text" name = "formLogin" required ><br >
    password<br >
    <input type = "password" name = "formPassword" required ><br >
    email <br >
    <input type = "email" name = "formEmail" required ><br >
    <input type = "submit" >
</form >