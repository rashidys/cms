<?php 
/**
 * Инициализация подключения к БД
 */
$dblocation = "127.0.0.1";
$dbname = "cmsdb";
$dbuser = "admin";
$dbpasswd = "q8861a35";

//Соединение с БД
$db = new mysqli($dblocation, $dbuser, $dbpasswd);

if(!$db){
    echo ('Ошибка доступа к ДБ');
    exit();
}

mysqli_set_charset($db, 'utf8');

if (!mysqli_select_db($db, $dbname,)){
    echo "Ошибка доступа к базе данных: ($dbname)";
    exit();
    
}