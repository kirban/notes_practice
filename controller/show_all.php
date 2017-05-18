<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 13.04.2017
 * Time: 11:26
 */
$root = $_SERVER['DOCUMENT_ROOT'];
require ("$root/config.php");
$title = "Главная - Notes Web Application";
$toptitle = "Мои заметки";


include ("../model/Database.php");

$PathModel = "$root/model";

$Database = new Database();

session_start();
$user_id = $_SESSION["user_id"];
$result = mysqli_query($Database->connection,"SELECT * FROM `notes` WHERE `user_id` = $user_id ORDER BY `pubdate` DESC");

include ("../view/form_notes_show.php");

require ("../view/top_template.php");
    while (($Database->record = mysqli_fetch_assoc($result))){
        $d = $Database->getNoteId();

        $buttons=<<<BUT
            <form method="post" class="form-inline col-lg-6 col-lg-offset-9">
              <button type="submit" class="btn btn-warning" formaction="../controller/fillForm.php" value="$d" name="change"><span class="glyphicon glyphicon-pencil"> Редактировать</span></button>
              <button type="submit" class="btn btn-danger" formaction="../controller/delete.php" value="$d" name="delete" ><span class="glyphicon glyphicon-remove"> Удалить</span></button>
              </form>
BUT;

        echo $p1.$Database->getNoteTitle($d).$p2.$buttons.$p3.$Database->getNoteText($d).$p3.$p4.$Database->getPubDate($d).$p5.$Database->getCatName($d).$p6;


}
require ("../view/bottom_template.php");
$Database->closeConnection();