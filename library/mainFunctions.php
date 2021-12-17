<?php 
/**
 * Библиотека функций
 * Основные фукции
 */
/**
 * формирование запрашиваемой страницы
 * 
 * @param unknown $controllerName Название конторойллера
 * @param string $actionName  Название функции обработки страницы
 */
function loadPage($smarty, $db, $controllerName, $actionName = 'index')
{
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    
    $function($smarty, $db);  
}
/**
 * Загрузка шаблона
 * @param unknown $smarty Обьект шаблонизатора
 * @param unknown $templateName Название файла шаблона
 */

function loadTemplate($smarty, $templateName)
{

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


function createSmartyRsArray($rs)
{
    if(!$rs) return false;
    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs))
    {
        $smartyRs[] = $row;
    }
    
    return $smartyRs;
}
















