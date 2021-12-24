<?php 

/** 
 * categoryController.php
 * Контроллер страницы категории(/catrgory/1)
 * 
 */


//подключаем модели

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
/** 
 * Формирование страницы категории
 * 
 * @param unknown $smarty
 */


function indexAction($smarty, $db)
{
   
    
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if($catId == null) exit();
    $rsProducts = null;
    $rsChildCats = null;
      
    $rsCategory = getCatById($db, $catId);
    if($rsCategory['parent_id'] == 0)
    {
        $rsChildCats = getChildrenForCat($catId, $db);
    }
    else 
    {
        $rsProducts = getProductsByCat($catId, $db);        
    }
    $rsCategories = getAllMainCatsWithChildren($db);
    $smarty->assign('pageTitle', 'Товары категории ', $rsCategory['name']);
    
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);
    
    $smarty->assign('rsCategories', $rsCategories);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
    
}
















