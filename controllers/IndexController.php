<?php 
 /**
 *  Контроллер главной страницы!!!
 * 
 */

function testAction(){
    echo 'Index controllet.php > testAction';
    
}

/**
 * Формирование главной страницы
 * @param unknown $smarty
 */


/**
 * Формирование главной страницы
 * 
 * @param unknown $smarty шаблонизатор
 */

function indexAction($smarty){
    $smarty->assign('pageTitle', 'Главная страница сайта');
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}












