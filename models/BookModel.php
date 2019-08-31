<?php

class BookModel extends basictable {

    static protected $table_name = "book";
    public $primary_key = "b_id";
    public $fields = array('b_pay', 'b_date', 's_id', 'm_id', 'b_details');
    public $b_pay;
    public $b_date;
    public $s_id;
    public $b_details;
    public $m_id;

    static public function get_student_by_id($m_id) {
        return DatabaseManager::getInstance()->dbh->query("select * from book where m_id=$m_id")->fetchAll(PDO::FETCH_ASSOC);
    }
    static public function get_student__id($b_id) {
        $m= DatabaseManager::getInstance()->dbh->query("select s_id from book where b_id=$b_id")->fetchAll(PDO::FETCH_CLASS ,  get_called_class());
    
        return $m[0];
    }

    static public function getbook() {
        return DatabaseManager::getInstance()->dbh->query("select * from book,student,material where book.s_id=student.s_id and book.m_id=material.m_id")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletestudent($primary_key) {

        return $this->dbh->query("delete from " . static::$table_name . " where s_id=$primary_key");
    }

    public function deletematerial($primary_key) {

        return $this->dbh->query("delete from " . static::$table_name . " where m_id=$primary_key");
    }

}
