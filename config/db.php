<?php
    function db()
    {
        // Вводим настройки пользователя и хоста
        $dblocation = "localhost";
        $dbname = "myshop";
        $dbuser = "root";
        $dbpassword = "root";

        // подключение к БД
        $db = mysqli_connect($dblocation, $dbuser, $dbpassword, $dbname);

        if (!$db) {
            echo "Ошибка доступа к MySQL";
            exit();
        }

        // установка кодировки utf-8 по умолчанию для текущего соединения
        mysqli_set_charset($db, 'utf8');

        // проверка на существование базы данных
        if (!mysqli_select_db($db, $dbname)) {
            echo "Ошибка доступа к базе данных: {$dbname}";
            exit();
        }
        return $db;
    }
