<?php
$indexPath = "..";
$Path = "E:/OpenServer/OpenServer/domains/practice.loc/model";
//require ("$indexPath/model/Database.php");
//require ("$indexPath/model/User.php");
session_start();
$username = $_SESSION["session_username"];
//$User = new User();
//$Database = new Database();
require ("E:/OpenServer/OpenServer/domains/practice.loc/config.php");

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

    <title><?php echo $config['title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $indexPath; ?>/view/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo $indexPath; ?>/view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $indexPath; ?>/view/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->


      <script src="<?php echo $indexPath; ?>/view/js/ie8-responsive-file-warning.js"></script>


    <script src="<?php echo $indexPath; ?>/view/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../"><?php echo $config['head_title']; ?></a>
        </div>

   <div class="collapse navbar-collapse hidden-sm hidden-md hidden-lg" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active hidden-sm hidden-md hidden-lg"><a href="/">Мои заметки</a></li>
        <li class="hidden-sm hidden-md hidden-lg"><a href="<?php echo $indexPath; ?>/controller/create.php" >Добавить заметку</a></li>
        <li class="hidden-sm hidden-md hidden-lg"><a href="<?php echo $indexPath; ?>/view/form_contact.php">Связаться с администрацией</a></li>
        <li class="hidden-sm hidden-md hidden-lg"><a href="<?php echo $indexPath; ?>/controller/signout.php"><strong>Выйти</strong></a></li>
       </ul>



        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 col-lg-2 sidebar">
          <div class="hello">
            <h3 class="page-header ">Привет, <?php echo $username; ?>!</h3>

          </div>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/">Мои заметки<span class="sr-only">(current)</span></a></li></a></li>
            <li><a href="<?php echo $indexPath; ?>/controller/create.php">Добавить заметку</a></li>
            <li><a href="<?php echo $indexPath; ?>/view/form_contact.php">Связаться с администрацией</a></li>
<!---->
<!--////              include ("$Path/Database.php");-->
<!--//              include ("$Path/User.php");-->
<!--//              $User = new User();-->
<!--//              if ($User->ifAdmin($username) != 0){-->
<!--//                  echo "<li><a href='$indexPath/controller/new_cat.php'><strong>Добавить категорию<sup style='color:red'>админ</sup></strong></a></li>";-->
<!--//                }-->
<!--//              -->
          </ul>
          <a href="<?php echo $indexPath; ?>/controller/signout.php"><strong>Выйти</strong></a>

        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $toptitle; ?></h1>
          <form method="POST"><a href="<?php echo $indexPath; ?>/controller/show_all.php" name="show_all"><?php echo $all ?></a></form>





