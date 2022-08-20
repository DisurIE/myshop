<?php

    /*
     * Модель для таблицы продукции (products)
     *
     */

    require_once '../config/db.php';

    function getLastProducts($limit = null){
        $sql = "SELECT * FROM `products` ORDER BY id DESC ";

        if(!$limit){
            $sql .= " LIMIT {$limit}";
        }

        $rs = db()->query($sql);

        return createSmartyRsArray($rs);
    }
