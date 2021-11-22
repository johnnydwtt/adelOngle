<?php

require_once(dirname(__FILE__).'/../utils/connect.php');

class Customer{

    private $_lastname;
    private $_firstname;
    private $_adress;
    private $_mail;
    private $_phone_number;
    private $_password;
    private $_created_at;
    private $_archived_at;
    private $_validate_at;


    private $_pdo;

    public function __construct(    
                                    $lastname = null,
                                    $firstname = null,
                                    $adress = null,
                                    $mail = null,
                                    $phone_number = null,
                                    $password = null,
                                    $archived_at = null,
                                    $validated_at = null
                                    ){

        $this->_lastname = $lastname;
        $this->_firstname = $firstname; 
        $this->_adress = $adress;  
        $this->_mail = $mail;
        $this->_phone_number = $phone_number;  
        $this->_password = $password; 
        $this->_archived_at = $archived_at; 
        $this->_validated_at = $validated_at;
        $this->_validated_token = bin2hex(openssl_random_pseudo_bytes(56));

        $this->_pdo = Database::getInstance();
    
    }

    public function create(){
        
        $sql = 'INSERT INTO `customer` (`firstname`, `lastname`, `mail`, `phone_number`, `adress`, `password`, `validated_token`)
        VALUES (:firstname, :lastname, :mail, :phone_number, :adress, :password, :validated_token);';
    
        try {
            $sth = $this->_pdo->prepare($sql);
            $sth->bindValue(':lastname', $this->_lastname);
            $sth->bindValue(':firstname', $this->_firstname);
            $sth->bindValue(':adress', $this->_adress);
            $sth->bindValue(':mail', $this->_mail);
            $sth->bindValue(':phone_number', $this->_phone_number);
            $sth->bindValue(':password', $this->_password);
            $sth->bindValue(':validated_token', $this->_validated_token);
            if(!$sth->execute()){
                throw new PDOException('Problème lors de de l\'inscription');
            }
            return true;
            var_dump($this);
            die;
        } catch (\PDOException $ex) {
            return $ex;
        }
    
    }

    public function ValidatedToken(){
        return $this->_validated_token;
    }

    public static function get($customer_id){
        $sql = 'SELECT * FROM `customer`
                WHERE `customer_id` = :customer_id;';
        try {
            $pdo = Database::getInstance();
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);
            if(!$sth->execute()){
                throw new PDOException('Erreur d\'exécution');
            }
            return $sth->fetch();
        } catch (\PDOException $ex) {
            return $ex;
        }

    }

    public static function deleteToken($customer_id){
        $sql = 'UPDATE `customer` SET `validated_token`= null
                WHERE `customer_id` = :customer_id';
        try {
            $pdo = Database::getInstance();
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);
            if(!$sth->execute()){
                throw new PDOException('Erreur d\'exécution');
            } else {
                return $sth->rowCount();
            }
        } catch (\PDOException $ex) {
            return $ex;
        }

    }

    public static function setValidateAccount($customer_id){
        $sql = 'UPDATE `customer` SET `validated_at`= CURRENT_TIMESTAMP()
                WHERE `customer_id` = :customer_id';
        
        try {
            $pdo = Database::getInstance();
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);

            if(!$sth->execute()){
                throw new PDOException('Problème de validation du compte');
            } else {
                return true;
            }
        } catch (\PDOException $ex) {
            return $ex;
        }
    }

    public static function getByEmail($mail){
        $sql = 'SELECT * FROM `customer` WHERE `mail` = :mail;';

        try {
            $pdo = Database::getInstance();
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':mail', $mail);

            if(!$sth->execute()){
                throw new PDOException('Problème d\'execution');
            } else {
                return $sth->fetch();
            }
        } catch (\PDOException $ex) {
            return $ex;
        }
    }

    public static function Validated($mail){
        $sql = 'SELECT `validated_at` FROM `customer` WHERE `mail` = :mail;';

        try {
            $pdo = Database::getInstance();
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':mail', $mail);

            if(!$sth->execute()){
                throw new PDOException('Problème d\'execution');
            } else {
                return $sth->fetchColumn();
            }
        } catch (\PDOException $ex) {
            return $ex;
        }
    }



}