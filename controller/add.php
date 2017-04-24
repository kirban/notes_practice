<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 11.04.2017
 * Time: 18:45
 */
require "../model/Database.php";
require "../model/User.php";

session_start();
$username = $_SESSION["session_username"];
$User = new User();


$Database = new Database();

$new_title = $_POST['new_title'];
$new_text = $_POST['new_text'];
$user_id = $_SESSION["user_id"];

if($Database->newNote($new_title,$new_text,$user_id))
{
    header('Location: ../');
}
else{
    echo 'ERROR!';
}