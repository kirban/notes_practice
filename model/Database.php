<?php

class Database{
    private $host = "localhost";
    private $user = "kirban";
    private $pass = "34752";
    private $db = "practice";
    public $connection;
    public $result;
    public $record;



    function connectToDb(){     //функция подключения к БД
        $this->connection = mysqli_connect('localhost','kirban','34752','practice');
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

    function getNoteTitle(){

        return $this->record[title];

    }
    function getNoteText(){

        return $this->record[text];

    }
    function getUserId(){

        return $this->record[user_id];

    }
    function getPubDate(){

        return $this->record[pubdate];

    }
    function setNoteTitle(){

    }
    function setNoteText(){

    }
    function setUserId(){

    }
    function setPubDate(){

    }

}