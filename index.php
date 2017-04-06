<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 27.03.2017
 * Time: 14:12
 */
$toptitle = "Мои заметки";
$title = "Главная - Notes Web Application";
require ("view/template.php");





echo $top;
include("controller/show.php");
echo $bottom;