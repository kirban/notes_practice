<?php
class User extends Database {
    protected $username;
    protected $password;


    function newUser ($username,$password,$email){

        return mysqli_query($this->connection,"INSERT INTO `users` (`id`, `username`, `password`, `is_admin`, `email`) VALUES (NULL, '$username', '$password', '0', '$email')");

    }
    function searchUser(){}
    function getUserId(){

    }

    function getUsername($id){

    }

}