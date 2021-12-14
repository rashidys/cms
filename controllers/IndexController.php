<?php
    
    
/**
 *  Контроллер главной страницы!!!
 * 
 */
function testAction(){
    echo 'Index controllet.php > testAction';
    
}

<<<<<<< HEAD
/**
 * Формирование главной страницы
 * @param unknown $smarty
 */

=======

/**
 * Формирование главной страницы
 * 
 * @param unknown $smarty шаблонизатор
 */
>>>>>>> 398e8ec4c71f35686241fc4676218db108dbe560
function indexAction($smarty){
    $smarty->assign('pageTitle', 'Главная страница сайта');
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}












