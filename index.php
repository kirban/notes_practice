<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 27.03.2017
 * Time: 14:12
 */
$toptitle = "Мои заметки";
$title = "Главная - Notes Web Application";
$all = "Все заметки";
require ("view/template.php");





echo $top;
include("controller/show.php");
if (isset($_POST['show_all'])){
    include "controller/show_all.php";
}
echo $bottom;