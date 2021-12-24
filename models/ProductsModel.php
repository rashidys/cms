<?php 
/**
 * Модуль для таблицы продукции (products) 
*/
/** 
 * Получаем послудние добавленные товары
 * @param unknown $db
 * @param unknown $limit
 * @return unknown
 */
function getLastProducts($db, $limit = null)
{
    $sql = "SELECT * 
    FROM `products`
    ORDER BY id DESC";
    
    if($limit)
    {
        $sql .= " LIMIT {$limit}";       
    }
    $rs = mysqli_query($db, $sql);
   
    return createSmartyRsArray($rs);
    
}
/** 
 * Получить продукты для категории $itemId
 * 
 * @param unknown $item
 * @param unknown $db
 * @return unknown
 */

function getProductsByCat($itemId, $db)
{
    $itemId = intval($itemId);
    $sql = "SELECT * 
             FROM products  
             WHERE category_id = '{$itemId}'";
    $rs = mysqli_query($db, $sql);
   
    return createSmartyRsArray($rs);
    
    
}










