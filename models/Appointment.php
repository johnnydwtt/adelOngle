<?php

require_once(dirname(__FILE__).'/../utils/connect.php');

class Appointment{

    private $_appointment_id;
    private $_day_set;
    private $_customer_id;
    // private $_time_id;

    private $_pdo;

    public function __construct(
                                // $appointment_id = NULL, 
                                $day_set = NULL
                                // $customer_id = NULL,
                                // $time_id = NULL
                                ){
        // $this->_id = $appointment_id;
        $this->_day_set = $day_set;
        // $this->_customer_id = $customer_id;
        // $this->_time_id = $time_id;

        $this->_pdo = Database::getInstance();
    }

    public function create(){
        try {
            $sql = 'INSERT INTO `appointment`(`day_set`) VALUES (:day_set)';
            $sth = $this->_pdo->prepare($sql);
                    //on injecte les valeurs
            $sth->bindvalue(":day_set", $this->_day_set);
            // $sth->bindvalue(":time_id", $this->_time_id);

            if(!$sth->execute()){
                throw new PDOException('Problème lors de de l\'enregistrement');
            }
            return true;
        } catch (\PDOException $ex) {
            return $ex;
        }
    
    }



}