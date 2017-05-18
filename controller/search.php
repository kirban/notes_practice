<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 16.05.2017
 * Time: 22:52
 */
require ("../model/Database.php");
$Database = new Database();
$query = $_POST['query'];
$toptitle = "Результаты поиска";
require ("../view/top_template.php");
echo $Database->search($query);
require ("../view/bottom_template.php");