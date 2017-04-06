<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 06.04.2017
 * Time: 12:41
 */
require ("model/Database.php");
$Database = new Database();
$Database->connectToDb();
$result = mysqli_query($Database->connection,"SELECT * FROM `notes` ORDER BY `pubdate` DESC");

//// находим максимальный (последний) $id записи(note) в базе данных
//$max = mysqli_query($Database->connection,"SELECT MAX(`id`) AS `id` FROM `notes`");
//$res_max = mysqli_fetch_assoc($max);
//$not_arr = $res_max['id'];
//echo "<p align='center'>";
//echo $not_arr;
//echo "</p>";
//
//// нашли



//for ($i=1;$i < count($result)+2;$i++){
//    $content=<<<CONTENT
//<!--	Контент-->
//
//<div class="zametka$i col-lg-offset-2">
//  <div class="row heading ">
//
//              <h3 class="col-lg-4">$record[title]</h3>
//  </div>
//              <button type="button" class="btn btn-warning"><span class="glyphicons glyphicons-edit"></span>Редактировать</button>
//        <button type="button" class="btn btn-danger"><span class="glyphicons glyphicons-delete"></span>Удалить</button>
//
//
//        <p class="col-lg-8">$record[text]</p>
//        <br><br>
//        <span class="text-muted">Дата публикации: $record[pubdate]</span>
//</div>
//<!--	конец контента-->
//CONTENT;
//    echo $content;
//}

while (($record = mysqli_fetch_assoc($result))){
        $content=<<<CONTENT
<!--	Контент-->

<div class="zametka$i col-lg-offset-2">
  <div class="row heading ">

              <h3 class="col-lg-4">$record[title]</h3>
  </div>
              <button type="button" class="btn btn-warning"><span class="glyphicons glyphicons-edit"></span>Редактировать</button>
        <button type="button" class="btn btn-danger"><span class="glyphicons glyphicons-delete"></span>Удалить</button>


        <p class="col-lg-8">$record[text]</p>
        <br><br>
        <span class="text-muted">Дата публикации: $record[pubdate]</span>
</div>
<!--	конец контента-->
CONTENT;
    echo $content;
}

    $Database->closeConnection();


?>