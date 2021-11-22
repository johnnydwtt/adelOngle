<?php

require_once(dirname(__FILE__).'/../utils/connect.php');

class Appointment{

    private $_id;
    private $_day_set;

    private $_pdo;

    public function __construct(
                                $id = NULL, 
                                $day_set = NULL, 
                                ){
        $this->_id = $id;
        $this->_day_set = $day_set;

        $this->_pdo = Database::getInstance();
    }



}