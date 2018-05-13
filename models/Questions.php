<?php

class Questions
{
    /**
     * Возвращает массив с вопросами, список
     */
    public static function getQuestionsListById()
    {
        
        $questionsList = array();
        
        $db = Db::getConnection();
        
        $result = $db->query('SELECT id, quest_text, answer_text, date_added '
                . 'FROM faq');
        
        $i=0;
        while($row = $result->fetch()) {
            $questionsList[$i]['id'] = $row['id'];
            $questionsList[$i]['question'] = $row['quest_text'];
            $questionsList[$i]['answer'] = $row['answer_text'];
            $questionsList[$i]['date'] = $row['date_added'];
            $i++;
        }
        
        return $questionsList;        
        
    }  
}