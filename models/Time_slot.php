<?php

require_once(dirname(__FILE__).'/../utils/connect.php');


class Time_slot{

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

    public static function read(){
        $sql = 'SELECT * FROM `time_slot`;';
        try {
            $pdo = Database::getInstance();
            $sth = $pdo->query($sql);

            return $sth->fetchAll();
        } catch (\PDOException $ex) {
            
        }

    }

    public static function delete($time_id){

        try{
            $pdo = Database::getInstance();
            $sql = 'DELETE FROM `time_slot`
                    WHERE `time_id` = :time_id;';

            $sth = $pdo->prepare($sql);
            $sth->bindValue(':time_id',$time_id,PDO::PARAM_INT);
            
            $sth->execute();
            if($sth === false){
                throw new PDOException(ERR_PDO);
            } else {
                if($sth->rowCount()==0){
                    throw new PDOException(ERR_DELETE_CLIENT_NOTOK);
                }else{
                    throw new PDOException(MSG_DELETE_CLIENT_OK);
                }
         }
        }
        catch(PDOException $ex){
            return $ex;
        }

    }

    public static function get($time_id){
        
        try{
            $pdo = Database::getInstance();

             // Si la limite n'est pas définie, il faut tout lister
                $sql = 'SELECT * FROM `time_slot` 
                WHERE `time_id` = :time_id;';


            $sth = $pdo->prepare($sql);
            $sth->bindValue(':time_id',$time_id);
            
            $result = $sth->execute();

            if($result === false){
                throw new PDOException(ERR_PDO);
            } else {
                return($sth->fetch());
            }
            
        }
        catch(PDOException $ex){
            return $ex;
        }

    }



}