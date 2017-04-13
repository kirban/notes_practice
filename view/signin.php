<?php
include "../model/Database.php";
include "../model/User.php";

$User = new User();
$User->connectToDb();

$query = mysqli_query($User->connection,"CREATE TABLE IF NOT EXISTS `practice`.`users` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `username` VARCHAR(25) NOT NULL , `password` VARCHAR(255) NOT NULL , `is_admin` BOOLEAN NULL , `email` VARCHAR (255) NULL , PRIMARY KEY (`id`), UNIQUE `username` (`username`)) ENGINE = InnoDB;");


    if ( isset($_POST['signin']) ) {

        $errors = array();
        if($User->userSearch($_POST['inputUsername']) == 0){
            $errors[] = 'Пользователя с таким именем не существует! <a href="../controller/register.php">Зарегистрируйтесь!</a>';
        }
        else{

            if (!password_verify($_POST['inputPassword'],$User->checkPassword($_POST['inputUsername']))){
                $errors[] = 'Неверный пароль!';
            }
        }
        if (empty($errors)){    // все хорошо
            header( 'Refresh: 5;url=http://practice.loc/index.php');
            echo '<div class="alert alert-success"><strong>Вы успешно вошли!</strong> Через 5 секунд вы окажетесь на главной!</div><hr>';
        }
        else{
            echo '<div class="alert alert-danger"><strong>'.array_shift($errors).'</strong></div>';
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

        <title>Вход - Notes Web Application</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

    <div class="container">

        <form class="form-signin" action="../view/signin.php" method="post">
            <h2 class="form-signin-heading">Добро пожаловать!</h2>

            <input type="text" class="form-control" placeholder="Имя пользователя" name="inputUsername">

            <input type="password" class="form-control" placeholder="Пароль" name="inputPassword">

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin" formaction="../view/signin.php">Вход</button>
            <button class="btn btn-lg btn-success btn-block" type="button" name="register" formaction="../controller/register.php">Регистрация</button>
        </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
    </html>
    <?php

$User->closeConnection();
?>