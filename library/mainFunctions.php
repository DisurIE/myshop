<?php

/**
 *
 * Основные функции
 *
 */


/**
 * Формирование главной страницы
 *
 * @param object $smarty объект смарти
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 */

function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}


/**
 * Загрузка шаблона
 *
 * @param object $smarty объект смарти
 * @param string $templateName имя шаблона
 * @return void
 */
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}