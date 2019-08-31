<?php

class MaterialModel extends basictable {

    static protected $table_name = "material";
    public $primary_key = "m_id";
    public $fields = array('m_name', 'm_money', 'm_teacher', 'm_details', 'm_primary');
    public $m_name;
    public $m_money;
    public $m_teacher;
    public $m_details;
    public $m_primary;
    public $m_id;
    
    static public function get_material_by_id($m_id){
        return DatabaseManager::getInstance()->dbh->query("select * from material where m_id=$m_id")->fetchAll(PDO::FETCH_ASSOC);
    }

}
