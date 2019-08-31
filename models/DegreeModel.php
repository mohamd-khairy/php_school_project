<?php

class DegreeModel extends basictable {

    static protected $table_name = "degree";
    public $primary_key = "d_id";
    public $fields = array('e_id', 's_id', 'd_degree');
    public $d_degree;
    public $d_id;
    public $e_id;
    public $s_id;

    static public function get_degree(){
        return DatabaseManager::getInstance()->dbh->query("select * from degree,student,exam,material where degree.s_id=student.s_id and degree.e_id=exam.m_id and degree.e_id=material.m_id")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function delete_student($primary_key) {

        return $this->dbh->query("delete from " . static::$table_name . " where s_id=$primary_key");
    }
    public function delete_exam($primary_key) {

        return $this->dbh->query("delete from " . static::$table_name . " where e_id=$primary_key");
    }
}
