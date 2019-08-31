<?php

class ExamModel extends basictable {

    static protected $table_name = "exam";
    public $primary_key = "e_id";
    public $fields = array('m_id', 'e_time', 'e_date', 'e_details', 'e_degree');
    public $e_degree;
    public $e_date;
    public $e_time;
    public $e_details;
    public $e_id;
    public $m_id;

    public static function getExam(){
        return DatabaseManager::getInstance()->dbh->query("select * from exam,material where exam.m_id=material.m_id")->fetchAll(PDO::FETCH_ASSOC);
    }
     public function delete_material_exam($primary_key) {

        return $this->dbh->query("delete from " . static::$table_name . " where m_id=$primary_key");
    }
}
