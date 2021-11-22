<?php

require_once(dirname(__FILE__).'/../utils/connect.php');


class Time_slot{

    private $_time_id;
    private $_time_set;

    private $_pdo;

    public function __construct(
                                $time_id = NULL, 
                                $time_set = NULL, 
                                ){
        $this->_time_id = $time_id;
        $this->_time_set = $time_set;

        $this->_pdo = Database::getInstance();
    }

}