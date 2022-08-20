<?php

/**
 * Контроллер главной страницы
 */

    function testAction(){
        echo 'это action index контроллера';
    }

    function indexAction($smarty){
        $smarty->assign('pageTitle', 'Главная страница сайта');
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'index');
        loadTemplate($smarty, 'footer');
    }