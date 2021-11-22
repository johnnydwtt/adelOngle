<?php

require_once(dirname(__FILE__).'/../utils/connect.php');


class Time_slot{

    private $_time_id;
    private $_datetime;

    private $_pdo;

    public function __construct(
                                $datetime = NULL
                                ){
        $this->_datetime = $datetime;

        $this->_pdo = Database::getInstance();
    }

    public function create(){
        try {
            $sql = 'INSERT INTO `time_slot`(`datetime`) VALUES (:datetime)';
            $sth = $this->_pdo->prepare($sql);
                    //on injecte les valeurs
            $sth->bindvalue(":datetime", $this->_datetime);

            if(!$sth->execute()){
                throw new PDOException('Problème lors de de l\'enregistrement');
            }
            return true;
        } catch (\PDOException $ex) {
            return $ex;
        }
    
    }

}