<?php

/**
 *
 * Контроллер главной страницы
 *
 */
    // подключаем модели
    include_once '../models/CategoriesModel.php';
    include_once '../models/ProductsModel.php';

    function testAction(){
        echo 'это action index контроллера';
    }

    function indexAction($smarty){

        $rsCategories = getAllMainCatsWithChildren();
        $rsProducts = getLastProducts(16);
        $smarty->assign('pageTitle', 'Главная страница сайта');
        $smarty->assign('rsCategories', $rsCategories);
        $smarty->assign('rsProducts', $rsProducts);

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'index');
        loadTemplate($smarty, 'footer');
    }