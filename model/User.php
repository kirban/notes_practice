<?php
class User extends Database {
    protected $username;
    protected $password;


    function newUser ($username,$password,$email){

        return mysqli_query($this->connection,"INSERT INTO `users` (`id`, `username`, `password`, `is_admin`, `email`) VALUES (NULL, '$username', '$password', '0', '$email')");

    }
    function userSearch($username){

        $q = mysqli_query($this->connection,"SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username'");
        $c = mysqli_fetch_assoc($q);
        return $c['COUNT(`id`)'];       //вернет 1 если найден или 0 если не найден

    }

    function checkPassword($username){

        $q = mysqli_query($this->connection,"SELECT `password` FROM `users` WHERE `username` = '$username'");
        $c = mysqli_fetch_assoc($q);
        return $c['password'];

    }

    function getUserId(){

    }

    function getUsername($id){

    }

}