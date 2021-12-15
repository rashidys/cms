<?php
//include_once '../config/db.php';

/**
 * Модель для таблицы категорий (categories)
 */

include_once '../config/db.php';


function getAllMainCatsWithChildren(){
    $sql = 'SELECT *
            FROM categories
            WHERE parent_id = 0 ';
    global $db;
   
    $rs = mysqli_query($db, $sql);
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs))
    {
        $smartyRs[] = $row;
    }
    
    return $smartyRs;
}










