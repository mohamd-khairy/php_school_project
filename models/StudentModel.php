<?php

class StudentModel extends basictable {

    static protected $table_name = "student";
    public $primary_key = "s_id";
    public $fields = array( 's_name','s_phone', 's_address','s_details');
    public $s_name;
    public $s_phone;
    public $s_address;
    public $s_details;

     static public function get_student($s_id){
        return DatabaseManager::getInstance()->dbh->query("select * from student where s_id=$s_id")->fetchAll(PDO::FETCH_ASSOC);
    }
     static public function get_student_name($s_id){
        $m= DatabaseManager::getInstance()->dbh->query("select s_name from student where s_id=$s_id")->fetchAll(PDO::FETCH_CLASS,  get_called_class());
        return $m[0];
        }
    
}
