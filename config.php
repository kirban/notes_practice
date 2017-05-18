<?php
$config = array(
    'title' => 'Notes Web Application - Developed by Kirill Romanov',   //заголовок во вкладке
    'head_title' => 'Notes Web Service',                                //заголовок в меню
    'show_limit' => 5,                                                  //отображаемое число записей на странице
    'db' => array(                                                      //данные для базы данных
        'host' => 'localhost',                                          //хост
        'user' => 'root',                                             //пользователь
        'password' => '',                                          //пароль
        'dbname' => 'notes_practice'),                                        //имя БД
    'Path' => 'E:/OpenServer/OpenServer/domains/practice.loc/',     //todo: сделать унифицированный, изменяемый путь до корня
);