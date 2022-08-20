<?php
    /*
     *
     * Модель для таблицы категорий (categories)
     *
     */
    require_once '../config/db.php';

    /**
     * Получить дочернии категории для категории $catId
     *
     * @param int $catId
     * @return void
     */
    function getChildrenForCat($catId){
        $sql = "SELECT * FROM categories WHERE parent_id='{$catId}'";
        $rs = db()->query($sql);

        return createSmartyRsArray($rs);
    }

/**
 *
 * Получить главные категории с привязкой дочерних
 *
 * @return array
 */
    function getAllMainCatsWithChildren(){
        $sql = 'SELECT * FROM categories WHERE parent_id=0';
        $rs = db()->query($sql);
        $smartyRs = [];

        while ($row = mysqli_fetch_assoc($rs)){

            $rsChildren = getChildrenForCat($row['id']);

            if($rsChildren){
                $row['children'] = $rsChildren;
            }

            $smartyRs[] = $row;
        }
        return $smartyRs;
    }