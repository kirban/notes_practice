<?php

/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 05.05.2017
 * Time: 19:36
 */
class Category extends Database
{
    function createTable(){

        return $q = mysqli_query($this->connection,"CREATE TABLE `practice`.`categories1` ( `category_id` INT(255) NOT NULL AUTO_INCREMENT , `category_name` VARCHAR(255) NOT NULL , PRIMARY KEY (`category_id`), INDEX `category_name` (`category_name`)) ENGINE = InnoDB;");

    }
    function returnListOfCategories(){

        $q = mysqli_query($this->connection,"SELECT `category_name` FROM `practice`.`categories` ");
        $c = mysqli_fetch_assoc($q);
        $count = mysqli_query($this->connection,"COUNT()");
        for ($i=1;i<$count;$i++){
            return $c['category_name'];
        }
    }

}