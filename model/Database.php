<?php

class Database{
    private $host = 'localhost';
    private $user = 'kirban';
    private $pass = '34752';
    private $db = 'practice';
    public $connection;
    public $result;
    public $record;



    function connectToDb(){     //функция подключения к БД
        $this->connection = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
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

        $this->connectToDb();
        $this->result = mysqli_query($this->connection,"SELECT * FROM `notes` ORDER BY `pubdate` DESC");
        $this->record = mysqli_fetch_assoc($this->result);

    }

    function getNoteId(){        // получение id заметки

        return $this->record[id];

    }

    function getNoteTitle($id){

        $q=mysqli_query($this->connection,"SELECT * FROM `notes` WHERE `id` = $id");
        $c=mysqli_fetch_assoc($q);
        return $c[title];

    }
    function getNoteText($id){

        $q=mysqli_query($this->connection,"SELECT * FROM `notes` WHERE `id` = $id");
        $c=mysqli_fetch_assoc($q);
        return $c[text];

    }
    function getUserId($id){

        $q=mysqli_query($this->connection,"SELECT * FROM `notes` WHERE `id` = $id");
        $c=mysqli_fetch_assoc($q);
        return $c[user_id];

    }
    function getPubDate($id){

        $q=mysqli_query($this->connection,"SELECT * FROM `notes` WHERE `id` = $id");
        $c=mysqli_fetch_assoc($q);
        return $c[pubdate];

    }

    function setNoteTitle($setTitle){

        mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `title` = $setTitle WHERE `notes`.`id` = $this->record[id]");

    }
    function setNoteText($setText){

        mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `text` = $setText WHERE `notes`.`id` = $this->record[id]");

    }

    function setUserId($setUserId){

        mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `user_id` = $setUserId WHERE `notes`.`id` = $this->record[id]");

    }

    function setPubDate($setPubDate){

        mysqli_query($this->connection,"UPDATE `practice`.`notes` SET `title` = $setPubDate WHERE `notes`.`id` = $this->record[id]");

    }

}