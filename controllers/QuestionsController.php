<?php

include_once ROOT . '/models/Questions.php';
include_once ROOT . '/models/Category.php';

class QuestionsController {

    public function actionList() {
        $questionsListById = array();
        $questionsListById = Questions::getQuestionsListById();
        
        $categoryList = array();
        $categoryList = Category::getCategoryList();
        
        //Подключаем шаблон. 
        require_once(ROOT . '/views/site/index.php');
        
        return true;
    }

}
