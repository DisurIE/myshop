<?php
    require_once '../config/config.php';//Инициализация настроек
    require_once '../config/db.php';//Инициализация базы данных
    require_once '../library/mainFunctions.php';    // Основные функции

    // Определяем с каким контроллером будем работать
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

    // Определяем с какой функцией будем работать
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
    loadPage($smarty, $controllerName, $actionName);