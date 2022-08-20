<?php

    /**
     * Файл конфигурации
     */

    // Константы для обращения к контроллерам
    define('PathPrefix', '../controllers/');
    define('PathPostfix', 'Controller.php');
    //<

    //> используемый шаблон
    $template = 'default';

    // пути к файлам шаблонов (*.tpl)
    define('TemplatePrefix', "../views/{$template}/");
    define('TemplatePostfix', ".tpl");

    // пути к файлам шаблонов в вебпространсве
    define('TemplateWebPath', "/www/templates/{$template}/");
    //<

    // Инициализация шаблонизатора Smarty
    // put full path to Smarty.class.php
    require_once '../library/Smarty/libs/Smarty.class.php';
    $smarty = new Smarty();

    $smarty->setTemplateDir(TemplatePrefix);
    $smarty->setCompileDir('../tmp/smarty/templates_c/');
    $smarty->setCacheDir('../tmp/smarty/cache/');
    $smarty->setConfigDir('../library/Smarty/configs/');
    $smarty->assign('templateWebPath', TemplateWebPath);
    //<
