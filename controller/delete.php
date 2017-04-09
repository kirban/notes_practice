<?php
include ('../model/Database.php');
$Database = new Database();
$Database->connectToDb();

$note_id = $_POST['delete'];

$q = mysqli_query($Database->connection,"DELETE FROM `practice`.`notes` WHERE `notes`.`id` = '$note_id'");
if (!$q){
    echo 'ERROR DELETING NOTE! CHECK THE CODE!';
    die();
}
else {
    echo 'SUCCESS!!!';
    $Database->closeConnection();
}