<?php 
/**
<<<<<<< HEAD
 * Библиотека функций
=======
 * Основные фукции
>>>>>>> 398e8ec4c71f35686241fc4676218db108dbe560
 */
/**
 * формирование запрашиваемой страницы
 * 
 * @param unknown $controllerName Название конторойллера
 * @param string $actionName  Название функции обработки страницы
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    
    $function($smarty);  
}
/**
 * Загрузка шаблона
<<<<<<< HEAD
 * @param unknown $smarty Обьект шаблонизатора
 * @param unknown $templateName Название файла шаблона
 */
function loadTemplate($smarty, $templateName){
=======
 * 
 * @param unknown $smarty
 * @param unknown $templateName
 */

function loadTemplate($smarty, $templateName)
{
>>>>>>> 398e8ec4c71f35686241fc4676218db108dbe560
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу программы выводя значение переменной
 * @param unknown $value  Переменная для выыода ее на страницу
 * @param number $die
 */
function d($value = null, $die = 1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    
    if ($die)die();
}












