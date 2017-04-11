<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 11.04.2017
 * Time: 17:21
 */
require ("../model/Database.php");
$toptitle = "Редактирование";
$title = "Редактирование заметки - Notes Web Service";
require ("../view/template.php");



$Database = new Database();


$note_id = $_POST['change'];

$note_title = $Database->getNoteTitle($note_id);
$note_text = $Database->getNoteText($note_id);


require "../view/form_note_change.php";

echo $top.$content.$bottom;