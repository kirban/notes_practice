<?php
require ("../model/Database.php");
require ("../view/template.php");
$toptitle = "Редактирование";
$Database = new Database();
$Database->connectToDb();


$note_id = $_POST['change'];

$note_title = $Database->getNoteTitle($note_id);
$note_text = $Database->getNoteText($note_id);


$content=<<<CONTENT
<!-- CONTENT -->
<div class="zametka">
    <div class="row heading">

        <form action="../controller/change.php" class="form-horizontal col-lg-offset-1">
            <div class="setTitle form-group"><h3><input type="text" class="col-lg-4" value="$note_title"></h3></div>
            <div class="setText form-group" ><textarea class="col-lg-6" rows="9">$note_text</textarea></div>
            <button type="sumbit" class="btn btn-success"><span class="glyphicons glyphicon-save"></span>Сохранить</button>
            <button type="button" class="btn btn-default"><span class="glyphicons glyphicons-edit"></span>Очистить форму</button>
        </form>



    </div>


</div>
</div>
</div>
<!-- CONTENT -->
CONTENT;

echo $top.$content.$bottom;

$q = mysqli_query($Database->connection,"UPDATE `practice`.`notes` SET `title` = 'Первый заголовок' WHERE `notes`.`id` = '$'");
if (!$q){
    echo 'ERROR CHANGING NOTE! CHECK THE CODE!';
    die();
}
else {
    echo 'SUCCESS!!!';
    $Database->closeConnection();
}
