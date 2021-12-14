<?php 
 /**
 *  Контроллер главной страницы!!!
 * 
 */
//подключаем модели
include_once '../models/CategoriesModel.php';
function testAction(){
    echo 'Index controllet.php > testAction';
    
}


/**
 * Формирование главной страницы
 * 
 * @param unknown $smarty шаблонизатор
 */

function indexAction($smarty){
    $rsCategories = getAllMainCatsWithChildren();
    
    $smarty->assign('pageTitle', 'Главная страница сайта');
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}












