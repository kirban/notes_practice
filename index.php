<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 27.03.2017
 * Time: 14:12
 */

require "model/Database.php";
require "model/User.php";

$User = new User();
$Database = new Database();

session_start();
if(!isset($_SESSION["session_username"])) {
    header("Location: view/signin.php");
}
else {
    $toptitle = "Мои заметки";
    $title = "Главная - Notes Web Application";
    $all = "Все заметки";
    require("view/top_template.php");
    $username = $_SESSION["session_username"];
    $_SESSION["user_id"] = $User->getUserId($username);


    include("controller/show.php");
    if (isset($_POST['show_all'])) {
        include("controller/show_all.php");
    }
    require("view/bottom_template.php");
}