<?php
require ("../model/Database.php");
$Database = new Database();

$new_title = $_POST['new_title'];
$new_text = $_POST['new_text'];

$Tit = $Database->setNoteTitle($new_title);
$Text = $Database->setNoteText($new_text);

$Database->closeConnection();

if (!$Tit && !$Text){
    echo 'ERROR CHANGING NOTE! CHECK THE CODE!';
    die();
}
else {
    echo 'SUCCESS!!!<br>';
    echo '<a href="/">Home</a>';
}