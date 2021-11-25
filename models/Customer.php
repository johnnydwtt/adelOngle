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
        
        $sql = 'INSERT INTO `customer` (`firstname`, `lastname`, `mail`, `phone_number`, `adress`, `password`, `validated_token`,`role_id`)
        VALUES (:firstname, :lastname, :mail, :phone_number, :adress, :password, :validated_token, 2);';
    
        try {
            if(!$this->isExist($this->_mail)){
                $sth = $this->_pdo->prepare($sql);
                $sth->bindValue(':lastname', $this->_lastname);
                $sth->bindValue(':firstname', $this->_firstname);
                $sth->bindValue(':adress', $this->_adress);
                $sth->bindValue(':mail', $this->_mail);
                $sth->bindValue(':phone_number', $this->_phone_number);
                $sth->bindValue(':password', $this->_password);
                $sth->bindValue(':validated_token', $this->_validated_token);

                $result = $sth->execute();

                if($result === false){
                    throw new PDOException('Problème d\'inscription');
                } else {
                    return true;
                }

            } else {
                throw new PDOException(ERR_EMAIL_EXIST);
            }
            
        } catch (\PDOException $ex) {
            return $ex;
        }
    
    }

    public static function isExist($mail){
        try{
            $pdo = Database::getInstance();
            $sql = 'SELECT `mail` FROM `customer` 
                    WHERE `mail` = :mail;';

            $sth = $pdo->prepare($sql);
            $sth->bindValue(':mail',$mail,PDO::PARAM_STR);
            $sth->execute();
            $result = $sth->fetchColumn();
            if($result){
                return true;
            }
        }
        catch(PDOException $ex){
            throw new PDOException($ex);
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
            
        }

    }

    public static function deleteToken($customer_id){
        $sql = 'UPDATE `customer` SET `validated_token`= null
                WHERE `customer_id` = :customer_id;';
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

    // *************************************
    // ** AFFICHER / MODIFIER / SUPPRIMER **
    // *************************************

    public static function getAll($search='', $limit=null, $offset=0){
        
        try{
            $pdo = Database::getInstance();

             // Si la limite n'est pas définie, il faut tout lister
            if(is_null($limit)){
                $sql = 'SELECT * FROM `customer` 
                WHERE `lastname` LIKE :search 
                OR `firstname` LIKE :search;';
            } else {
                $sql = 'SELECT * FROM `customer` 
                WHERE `lastname` LIKE :search 
                OR `firstname` LIKE :search 
                LIMIT :limit OFFSET :offset;';
            }

            $sth = $pdo->prepare($sql);
            $sth->bindValue(':search','%'.$search.'%',PDO::PARAM_STR);
            
            if(!is_null($limit)){
                $sth->bindValue(':offset', $offset, PDO::PARAM_INT);
                $sth->bindValue(':limit', $limit, PDO::PARAM_INT);
            }
            
            $result = $sth->execute();

            if($result === false){
                throw new PDOException(ERR_PDO);
            } else {
                return($sth->fetchAll());
            }
            
        }
        catch(PDOException $ex){
            return $ex;
        }

    }

    public static function read($customer_id){

        try {
            $pdo = Database::getInstance();
            $sql = 'SELECT * FROM `customer` WHERE `customer_id` = :customer_id;';

            $sth = $pdo->prepare($sql);
            $sth->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);

            $result = $sth->execute();
            if($result){
                $customer = $sth->fetch();
                if($customer===false){
                    //Patient non trouvé
                    throw new PDOException('Client non trouvé');
                } else {
                    return $customer;
                }
            } else {
                //Erreur générale
                throw new PDOException('Erreur d\'exécution de la requête');
            }

        } catch (\PDOException $ex) {
            return $ex;
        }


    }

    /**
     * Méthode qui permet de mettre à jour un patient
     * 
     * @return boolean
     */
    public function update($customer_id){
        try{
            // On récupère le client
            $response = $this::get($customer_id);
            
            //Si la réponse est une erreur on sort via le catch
            if($response instanceof PDOException){
                throw new PDOException($response->getMessage());
            }

            // Si le mail n'existe pas en base ou que ça n'est pas déjà le mail du client que l'on modifie
            // on a le droit de faire les modifs
            if(!$this->isExist($this->_mail) || $this->_mail==$response->mail){
                $sql = 'UPDATE `customer` SET `lastname` = :lastname,  `firstname` = :firstname, `mail` = :mail, `phone_number` = :phone_number, `adress` = :adress
                        WHERE `customer_id` = :customer_id;';

                $sth = $this->_pdo->prepare($sql);
                $sth->bindValue(':lastname',$this->_lastname);
                $sth->bindValue(':firstname',$this->_firstname);
                $sth->bindValue(':mail',$this->_mail);
                $sth->bindValue(':phone_number',$this->_phone_number);
                $sth->bindValue(':adress',$this->_adress);
                $sth->bindValue(':customer_id',$customer_id,PDO::PARAM_INT);
                $result = $sth->execute();

                if($result === false){
                    throw new PDOException(ERR_UPDATE_CLIENT_NOTOK);
                }else{
                    return true;
                }
                
            } else {
                throw new PDOException(ERR_CLIENTEXIST);
            }
        } catch(PDOException $ex){
            return $ex;
        }
    }


    public function ChangePassword($customer_id){
        try{

                $sql = 'UPDATE `customer` SET `password` = :password
                        WHERE `customer_id` = :customer_id;';

                $sth = $this->_pdo->prepare($sql);
                $sth->bindValue(':password',$this->_password);
                $sth->bindValue(':customer_id',$customer_id,PDO::PARAM_INT);
                $result = $sth->execute();

                if($result === false){
                    throw new PDOException(ERR_UPDATE_CLIENT_NOTOK);
                }else{
                    return true;
                }

        } catch(PDOException $ex){
            return $ex;
        }
    }


    /**
     * Méthode qui permet de supprimer un patient
     * 
     * @return boolean
     */
    public static function delete($customer_id){

        try{
            $pdo = Database::getInstance();
            $sql = 'DELETE FROM `customer`
                    WHERE `customer_id` = :customer_id;';

            $sth = $pdo->prepare($sql);
            $sth->bindValue(':customer_id',$customer_id,PDO::PARAM_INT);
            
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

    public static function count($s){

        try {

            $pdo = Database::getInstance();

            $sql = 'SELECT COUNT(`customer_id`) as `nbPatients` FROM `customer`
                    WHERE `lastname` LIKE :search 
                    OR `firstname` LIKE :search;';

            $sth = $pdo->prepare($sql);
            $sth->bindValue(':search','%'.$s.'%',PDO::PARAM_STR);
            $result = $sth->execute();
            if($result === false){
                throw new PDOException(ERR_PDO);
            } else {
                $count = $sth->fetchColumn();
                if($count === false){
                    return 0;
                } else {
                    return $count;
                }
            }
        
        } catch (\PDOException $ex) {
            return 0;
        }
        

    }



}