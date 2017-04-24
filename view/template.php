<?php
session_start();
$username = $_SESSION["session_username"];
$top = <<<TOP
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

    <title>$title</title>

    <!-- Bootstrap core CSS -->
    <link href="../view/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../view/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../view/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../view/js/ie-emulation-modes-warning.js"></script>

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
          <a class="navbar-brand" href="../">Notes service</a>
        </div>
        
   <div class="collapse navbar-collapse hidden-sm hidden-md hidden-lg" id="navbar">
      <ul class="nav navbar-nav">
        <li class="active hidden-sm hidden-md hidden-lg"><a href="/">Мои заметки</a></li>
        <li class="hidden-sm hidden-md hidden-lg"><a href="../view/form_note_create.php" >Добавить заметку</a></li>
        <li class="hidden-sm hidden-md hidden-lg"><a href="../view/form_contact.php">Связаться с администрацией</a></li>
        <li class="hidden-sm hidden-md hidden-lg"><a href="../controller/signout.php"><strong>Выйти</strong></a></li>
       </ul>

      
       
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 col-lg-2 sidebar">
          <div class="hello">
            <h3 class="page-header ">Привет, $username!</h2>
            
          </div>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/">Мои заметки<span class="sr-only">(current)</span></a></li></a></li>
            <li><a href="../view/form_note_create.php">Добавить заметку</a></li>
            <li><a href="../view/form_contact.php">Связаться с администрацией</a></li>
            
            <li class="hidden"><a href="#">Удалить пользователя<sup style="color:red">админ</sup></a></li>
          </ul>
          <a href="../controller/signout.php"><strong>Выйти</strong></a>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">$toptitle</h1>
          <form method="POST" action="index.php"><a href="../controller/show_all.php" name="show_all">$all</a></form>

          

          
        
TOP;


$bottom = <<<BOTTOM
</div>
</div>
</div>

</div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../view/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../view/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../view/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../view/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
BOTTOM;
