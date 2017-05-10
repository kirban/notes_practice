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
        $i = 0;
        foreach ($q as $c){
            $cat_name = $c['category_name'];
            $cat_id = $i;
            print_r("<button type='sumbit' name='cat_id' value='$cat_id'>$cat_name</button>");
            $i++;

        }
    }

    function returnListOptions($unsetCat){

        $q = mysqli_query($this->connection,"SELECT `category_name` FROM `practice`.`categories` ");
        $c = mysqli_fetch_assoc($q);

        if (is_null($unsetCat)) {   //если 0, то просто выводим список
            foreach ($q as $c) {
                print_r("<option>" . $c['category_name'] . "</option>");
            }

        }
        else{
        // если задан параметр метода
            foreach ( $q as $c => $value){
                if ($value['category_name'] == $unsetCat){
                    // если параметр совпадает с названием уже выведенной категории, то: cлед. итерация
                    continue;
                }
                else {
                    //вывод на экран
                    $cat_name = $value['category_name'];
                    print_r("<option value='$cat_name'>$cat_name</option>");

                }
            }
        }
    }


}