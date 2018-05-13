<?php

class Category 
{
    /**
     * Возвращает массив с категориями
     */
    public static function getCategoryList()
    {
        
        $categoryList = array();
        
        $db = Db::getConnection();
        
        $result = $db->query('SELECT id, cat_name FROM cat');
        
        $i=0;
        while($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['catName'] = $row['cat_name'];
            $i++;
        }
        
        return $categoryList;        
        
    }  
}
