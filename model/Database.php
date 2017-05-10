<?php

class Database{

    public $connection;
    public $result;
    public $record;



    function createTable(){

        return mysqli_query($this->connection,"CREATE TABLE `practice`.`notes` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NULL DEFAULT NULL , `text` TEXT NULL DEFAULT NULL , `user_id` INT(11) NULL DEFAULT NULL , `pubdate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `category_id` INT(11) NOT NULL DEFAULT '0' , `category_name` VARCHAR(255) NOT NULL DEFAULT 'Без категории' , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

    }


    function connectToDb($config){     //функция подключения к БД

//        $this->connection = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        $this->connection = mysqli_connect($config['db']['host'],$config['db']['user'],$config['db']['password'],$config['db']['dbname']);
        if (!$this->connection){

            echo "<script>alert('ERROR CONNECTING TO DATABASE!')</script>";
            echo mysqli_connect_error();
            die();

        }
    }

    function closeConnection(){     //функция отключения от БД

        mysqli_close($this->connection);

    }

    function __construct()
    {
        require ("E:/OpenServer/OpenServer/domains/practice.loc/config.php");
        if (!empty($config)) {
            $this->connectToDb($config);
        }
        $this->result = mysqli_query($this->connection,"SELECT * FROM `notes` ORDER BY `pubdate` DESC");
        $this->record = mysqli_fetch_assoc($this->result);

    }

    function getNoteId(){        // получение id заметки

        return $this->record[id];

    }

    function getNoteTitle($id){

        $q = mysqli_query($this->connection,"SELECT `title` FROM `notes` WHERE `id` = $id");
        $c = mysqli_fetch_assoc($q);
        return $c[title];

    }
    function getNoteText($id){

        $q = mysqli_query($this->connection,"SELECT `text` FROM `notes` WHERE `id` = $id");
        $c = mysqli_fetch_assoc($q);
        return $c[text];

    }
    function getUserNotes($id){

        $q = mysqli_query($this->connection,"SELECT `user_id` FROM `notes` WHERE `id` = $id");
        $c = mysqli_fetch_assoc($q);
        return $c[user_id];

    }
    function getPubDate($id){

        $q = mysqli_query($this->connection,"SELECT `pubdate` FROM `notes` WHERE `id` = $id");
        $c = mysqli_fetch_assoc($q);
        return $c[pubdate];

    }

    function getCatName($id){

        $q = mysqli_query($this->connection,"SELECT `category_name` FROM `notes` WHERE `id` = $id");
        $c = mysqli_fetch_assoc($q);
        return $c[category_name];

    }


    function newNote($title,$text,$user_id,$category_id,$category_name){

        return mysqli_query($this->connection,"INSERT INTO `notes` (`id`, `title`, `text`, `user_id`, `pubdate`,`category_id`,`category_name`) VALUES (NULL, '$title', '$text', '$user_id', CURRENT_TIMESTAMP,'$category_id','$category_name')");

    }

    function setNoteTitle($setTitle){

        $id = $this->getNoteId();
        return mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `title` = '$setTitle' WHERE `notes`.`id` = $id");


    }
    function setNoteText($setText){
        $id = $this->getNoteId();
        return mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `text` = '$setText' WHERE `notes`.`id` = $id");


    }

    function setUserId($setUserId){

        $id = $this->getNoteId();
        return mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `user_id` = '$setUserId' WHERE `notes`.`id` = $id");

    }

    function setPubDate($setPubDate){

        $id = $this->getNoteId();
        return mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `pub_date` = $setPubDate WHERE `notes`.`id` = $id");

    }

    function setCatName($new_catName){
        $id = $this->getNoteId();
        return mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `category_name` = '$new_catName' WHERE `notes`.`id` = $id");
    }

    function setCatId(){
        $id = $this->getNoteId();
        $cat_name = $this->getCatName($id);

        switch($cat_name){
            case 'Без категории':
                $cat_id = 0;
                break;
            case 'Напоминания':
                $cat_id = 1;
                break;
            case 'О жизни':
                $cat_id = 2;
                break;
            case 'Приколы':
                $cat_id = 3;
                break;
        }
        return mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `category_id` = '$cat_id' WHERE `notes`.`id` = $id");

    }

}