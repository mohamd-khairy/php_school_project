<?php

class DatabaseManager {

    static $instance = NULL;
    public $dbh;

    static public function getInstance() {
        // singleton design pattern....
        if (self::$instance == null) {
            self::$instance = new DatabaseManager();
        }
        return self::$instance;
    }

    private function __construct() {
        $this->dbh = new PDO("mysql://hostname=" . SERVER_IP . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    }

}
