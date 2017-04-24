<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 13.04.2017
 * Time: 11:26
 */
$title = "Главная - Notes Web Application";
$toptitle = "Мои заметки";

include "../view/template.php";
require ("../model/Database.php");
$Database = new Database();
session_start();
$user_id = $_SESSION["user_id"];
$result = mysqli_query($Database->connection,"SELECT * FROM `notes` WHERE `user_id` = $user_id ORDER BY `pubdate` DESC");
include ("../view/form_notes_show.php");

echo $top;
    while (($Database->record = mysqli_fetch_assoc($result))){
        $d = $Database->getNoteId();
        $buttons=<<<BUT
            <form method="post" class="form-inline col-lg-6 col-lg-offset-9">
              <button type="submit" class="btn btn-warning" formaction="../controller/fillForm.php" value="$d" name="change"><span class="glyphicons glyphicons-edit"></span>Редактировать</button>
              <button type="submit" class="btn btn-danger" formaction="../controller/delete.php" value="$d" name="delete" ><span class="glyphicons glyphicons-delete"></span>Удалить</button>
              </form>
BUT;

        echo $p1.$Database->getNoteTitle($d).$p2.$buttons.$p3.$Database->getNoteText($d).$p3.$p4.$Database->getPubDate($d).$p5;


}
echo $bottom;
$Database->closeConnection();