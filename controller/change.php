<?php
require ("../model/Database.php");
$toptitle = "Редактирование";
$title = "Редактирование заметки - Notes Web Service";
require ("../view/template.php");



$Database = new Database();
$Database->connectToDb();


$note_id = $_POST['change'];

$note_title = $Database->getNoteTitle($note_id);
$note_text = $Database->getNoteText($note_id);


$content=<<<CONTENT
<!-- CONTENT -->
<div class="zametka">
    <div class="row heading">

        <form action="../controller/change.php" method="post" class="form-horizontal col-lg-offset-1">
            <div class="setTitle form-group"><h3><input type="text" class="col-lg-4" value="$note_title" name="newtitle"></h3></div>
            <div class="setText form-group" ><textarea class="col-lg-6" rows="9" name="newtext">$note_text</textarea></div>
            <button type="sumbit" class="btn btn-success"><span class="glyphicons glyphicon-save"></span>Сохранить</button>
            <button type="reset" class="btn btn-default"><span class="glyphicons glyphicons-edit"></span>Сбросить</button>
        </form>



    </div>


</div>
</div>
</div>
<!-- CONTENT -->
CONTENT;

echo $top.$content.$bottom;

$newtitle = $_POST['newtitle'];
$newtext = $_POST['newtext'];


$q = mysqli_query($Database->connection,"UPDATE `practice`.`notes` SET `title` = `$newtitle`, `text` = `$newtext` WHERE `notes`.`id` = `$note_id`");

if (!$q){
    echo 'ERROR CHANGING NOTE! CHECK THE CODE!';
    die();
}
else {
    echo 'SUCCESS!!!';
    $Database->closeConnection();
}