<?php 
 /**
 *  Контроллер главной страницы!!!
 * 
 */
//подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function testAction(){
    echo 'Index controllet.php > testAction';
    
}


/**
 * Формирование главной страницы
 * 
 * @param unknown $smarty шаблонизатор
 */

function indexAction($smarty, $db){
    $rsCategories = getAllMainCatsWithChildren($db);
    //d($db);
    $rsProducts = getLastProducts($db, 16); 
       
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);
  
    $smarty->assign('rsProducts', $rsProducts);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}












