<?php

class Database{
    private $host = "localhost";
    private $user = "kirban";
    private $pass = "34752";
    private $db = "practice";
    public $connection;

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
    function showNotes(){


    }

    function getNoteId(){        // получение id заметки

    }



    function getNoteTitle(){

    }
    function getNoteText(){

    }
    function getUserId(){

    }
    function getPubDate(){

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