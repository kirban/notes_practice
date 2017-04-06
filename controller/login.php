<?php
include "../model/db.php";



echo $form = <<<FORM
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<body>
    <link rel="stylesheet" href="../view/css/style.css">
    <section class="title">Добро пожаловать!</section>
    <form method="post" action="login.php">
    <input type="text" class="username" maxlength="40"  placeholder="Имя пользователя: " name="username" ><br>
    <input type="password" class="pass" pattern="[A-Za-zА-Яа-яЁё0-9]{6,}"  placeholder="Пароль: "  name="password"><br>
    <a href="register.php" class="regbut">Регистрация</a>
    <input type="submit" class="enterbut" value="Вход" formaction="login.php">
    </form>
</body>
</html>
FORM;
?>