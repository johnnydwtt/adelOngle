<?php
require_once(dirname(__FILE__).'/../utils/connect.php');

class Prestation{

    public static function getAll(){
        $sql = 'SELECT * FROM `prestation` ORDER BY `prestation_id` ASC;';
        try {
            $pdo = Database::getInstance();

            if(!$sth=$pdo->query($sql)){
                throw new PDOException('Erreur d\'exécution');
            }
            return $sth->fetchAll();
        } catch (\PDOException $ex) {
            
        }

    }

    public static function get($id){
        $sql = 'SELECT * FROM `prestation`
                WHERE `prestation_id` = :prestation_id;';
        try {
            $pdo = Database::getInstance();
            $sth = $pdo->prepare($sql);
            $sth->bindValue(':prestation_id', $id, PDO::PARAM_INT);
            if(!$sth->execute()){
                throw new PDOException('Erreur d\'exécution');
            }
            return $sth->fetch();
        } catch (\PDOException $ex) {

        }

    }


}