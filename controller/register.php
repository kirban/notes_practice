<?php

require "../db.php";

$data = $_POST;
if (isset($data['submit'])){

    $errors=array();
    if ($data['password'] != $data['re_password'])
    {
        $errors[] = 'Пароли не совпадают!';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация - Веб приложение</title>
</head>
<body>
<link rel="stylesheet" href="../view/css/style.css">
<section class="title">Регистрация</section>

<form method="post" action="register.php">
    <input type="text" class="username" maxlength="40" placeholder="Имя пользователя: " name="username" required/><br>
    <input type="password" class="pass"   placeholder="Пароль: "  name="password" required/><br>
    <input type="password" class="pass"  placeholder="Еще раз пароль: "  name="re_password" required/><br>
    <input type="email" class="pass" placeholder="E-mail: "  name="email"/><br>
    <input type="submit" class="regbut" value="Готово!">
</form>

</body>
</html>
pattern="[A-Za-zА-Яа-яЁё0-9]{6,}"