<?php
include ('../model/Database.php');
$Database = new Database();
$Database->connectToDb();

$note_id = $_POST['delete'];

$q = mysqli_query($Database->connection,"DELETE FROM `notes` WHERE `notes`.`id` = '$note_id'");
if (!$q){
    echo 'ERROR DELETING NOTE! CHECK THE CODE!';
    echo '<a href="/">Назад</a>';
    die();
}
else {
    header('Location: ../');
    $Database->closeConnection();

}