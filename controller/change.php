<?php
require ("../model/Database.php");
$Database = new Database();

$new_title = $_POST['new_title'];
$new_text = $_POST['new_text'];
$new_catName = $_POST['new_catName'];

$Tit = $Database->setNoteTitle($new_title);
$Text = $Database->setNoteText($new_text);
$CatName = $Database->setCatName($new_catName);
$CatId = $Database->setCatId();

$Database->closeConnection();

if (!$Tit && !$Text && !$CatName && !$CatId){
    echo 'ERROR CHANGING NOTE! CHECK THE CODE!';
    die();
}
else {
  header('Location: ../');
  exit;
}