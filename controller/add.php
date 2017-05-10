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

switch ($_POST['category_name']){
    case 'Без категории':
        $category_id = 0;
        break;
    case 'Напоминания':
        $category_id = 1;
        break;
    case 'О жизни':
        $category_id = 2;
        break;
    case 'Приколы':
        $category_id = 3;
        break;
}

$new_title = $_POST['new_title'];
$new_text = $_POST['new_text'];
$user_id = $_SESSION["user_id"];
$category_name = $_POST['category_name'];

if($Database->newNote($new_title,$new_text,$user_id,$category_id,$category_name))
{
    header('Location: ../');
}
else{
    echo 'ERROR!';
}