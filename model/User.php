<?php
class User extends Database {

    function newTableUser(){
        return mysqli_query($this->connection,"CREATE TABLE `practice`.`users` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `username` VARCHAR(25) NOT NULL , `password` VARCHAR(255) NOT NULL , `is_admin` BOOLEAN NULL , `email` VARCHAR(255) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
    }
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

    function getUserId($username){
        $q = mysqli_query($this->connection,"SELECT `id` FROM `users` WHERE `username` = '$username'");
        $c = mysqli_fetch_assoc($q);
        return $c['id'];
    }

    function getUsername($id){
        $q = mysqli_query($this->connection,"SELECT `username` FROM `users` WHERE `id` = '$id'");
        $c = mysqli_fetch_assoc($q);
        return $c['username'];
    }

    function ifAdmin($username){
        $q = mysqli_query($this->connection,"SELECT `is_admin` FROM `users` WHERE `username` = '$username'");
        $c = mysqli_fetch_assoc($q);
        return $c['is_admin'];
    }
}