<?php
include "../model/Database.php";
include "../model/User.php";
require ("E:/OpenServer/OpenServer/domains/practice.loc/config.php");
$User = new User();
$User->connectToDb($config);

$data = $_POST;
if(isset($_POST['regbut'])){
    $username = trim($data['inputUserName']);
    $password = password_hash($data['inputPassword'],PASSWORD_DEFAULT);
    $email = trim($data['inputEmail']);
    $sql = "SELECT * FROM `users` WHERE `username` = $username";
    $select = mysqli_query($User->connection,$sql);

    $errors = array();
    if( $username == ''){
        $errors[] = 'Введите логин!';
    }
    if( $email == ''){
        $errors[] = 'Введите Email!';
    }
    if( $data['inputPassword'] == ''){
        $errors[] = 'Введите пароль!';
    }
    if( $data['inputPassword'] != $data['inputPassword2']){
        $errors[] = 'Введенные пароли не совпадают!';
    }
    if ($select != 0){
        $errors[] = 'Пользователь с таким логином уже существует!';
    }
    if ( empty($errors) ){
        //все хорошо

        if($User->newUser($username,$password,$email)){
            header( 'Refresh: 5;url=../index.php');
        echo '<div class="alert alert-success"><strong>Вы успешно зарегистрированы!</strong> Через 5 секунд вы будете перенаправлены на страницу входа</div><hr>';

        }
        else{
            echo 'ERROR!'.mysqli_error($User->connection);
        }

    }
    else{
        //выводим ошибку
        echo '<div class="alert alert-danger"><strong>'.array_shift($errors).'</strong></div><hr>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Регистрация - Notes Web Application</title>

    <!-- Bootstrap core CSS -->
    <link href="../view/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../view/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../view//js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signup" action="../controller/register.php" method="POST">
        <h2 class="form-signup-heading">Регистрация</h2>
        <input type="text" name="inputUserName" class="form-control" placeholder="Имя пользователя:" value="<?php echo @$data['inputUserName'];?>"> <!--required-->
        <br>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email" value="<?php echo @$data['inputEmail'];?>"> <!--required-->
        <br>
        <input type="password" name="inputPassword" class="form-control" placeholder="Пароль"> <!--required-->
        <br>
        <input type="password" name="inputPassword2" class="form-control" placeholder="Пароль еще раз"> <!--required-->
        <br>


        <button class="btn btn-lg btn-primary" type="submit" name="regbut">Зарегистрироваться</button>
        <button class="btn btn-lg btn-default" type="reset">Очистить форму</button>
    </form>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../view/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php

$User->closeConnection();
?>