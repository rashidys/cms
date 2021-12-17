<?php
/**
 * Модель для таблицы категорий (categories)
 */

/**
 * Формирование запрашиваемой страницы
 * @param unknown $catId
 * @return unknown
 */

function getChildrenForCat($catId, $db)
{
    
   
    $sql = "SELECT *
            FROM categories
            WHERE 
            parent_id = '{$catId}'"; 
            global $db;
            $rs = mysqli_query($db, $sql);
            
            return  createSmartyRsArray($rs);
}

/**
 * Получить главные категории с привязкой дочерних
 * 
 * @return unknown[]
 */

function getAllMainCatsWithChildren($db){
    $sql = 'SELECT *
            FROM categories
            WHERE parent_id = 0 ';
    
   
    $rs = mysqli_query($db, $sql);
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs))
    {
        $rsChildren = getChildrenForCat($row['id'], $db);
        
        if($rsChildren)
        {
            $row['children'] = $rsChildren;            
        }
        $smartyRs[] = $row;
    }
   
    return $smartyRs;
}










