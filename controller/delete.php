<?php
include ('../model/Database.php');
$root = $_SERVER['DOCUMENT_ROOT'];
require ("$root/config.php");
$Database = new Database();
$Database->connectToDb($config);

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