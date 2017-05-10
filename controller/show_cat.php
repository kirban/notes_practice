<?php
///**
// * Created by PhpStorm.
// * User: Кирилл
// * Date: 10.05.2017
// * Time: 15:18
// */
require ("E:/OpenServer/OpenServer/domains/practice.loc/config.php");
session_start();
$user_id = $_SESSION["user_id"];
$cat_id = $_POST["cat_id"];


$title = "Главная - Notes Web Application";
$toptitle = "Мои заметки";


include ("../model/Database.php");
$PathModel = "E:/OpenServer/OpenServer/domains/practice.loc/model";

$Database = new Database();

// основной запрос
$result = mysqli_query($Database->connection,"SELECT * FROM `practice`.`notes` WHERE `user_id` = $user_id AND `category_id` = \"$cat_id\" ORDER BY `pubdate` DESC");




include ("../view/form_notes_show.php");

require ("../view/top_template.php");

if (mysqli_num_rows($result) == 0){
    $all = NULL;
    echo '<h4>Заметок нет!</h4>';
} else {
    while (($Database->record = mysqli_fetch_assoc($result))) {
        $d = $Database->getNoteId();

        $buttons = <<<BUT
            <form method="post" class="form-inline col-lg-6 col-lg-offset-9">
              <button type="submit" class="btn btn-warning" formaction="../controller/fillForm.php" value="$d" name="change"><span class="glyphicons glyphicons-edit"></span>Редактировать</button>
              <button type="submit" class="btn btn-danger" formaction="../controller/delete.php" value="$d" name="delete" ><span class="glyphicons glyphicons-delete"></span>Удалить</button>
              </form>
BUT;

        echo $p1 . $Database->getNoteTitle($d) . $p2 . $buttons . $p3 . $Database->getNoteText($d) . $p3 . $p4 . $Database->getPubDate($d) . $p5 . $Database->getCatName($d) . $p6;


    }
    require("../view/bottom_template.php");
    $Database->closeConnection();
}