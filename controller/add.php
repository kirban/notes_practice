<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 11.04.2017
 * Time: 18:45
 */
require ("../model/Database.php");
$Database = new Database();

$new_title = $_POST['new_title'];
$new_text = $_POST['new_text'];
$user_id = 1;

if($Database->newNote($new_title,$new_text,$user_id))
{
    header('Location: http://practice.loc/');
}
else{
    echo 'ERROR!';
}