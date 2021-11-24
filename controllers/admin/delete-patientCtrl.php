<?php
require_once(dirname(__FILE__).'/../utils/init.php');
require_once(dirname(__FILE__) . '/../models/Customer.php');

if($_SESSION['customer']->role_id == 1){
// Nettoyage de l'id du Client passé en GET dans l'url
$customer_id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));
/*********************************************************/

// Suppression du Client, et de tous ses rendez-vous. 
// Une contrainte ON DELETE CASCADE, permet de supprimer tous les
// enregistrements d'appointment également.  
$response = Customer::delete($customer_id);

// Si $response appartient à la classe PDOException (Si une exception est retournée),
// on stocke un message d'erreur à afficher dans la vue
if($response instanceof PDOException){
    $message = $response->getMessage();
}

/* ************* AFFICHAGE DES VUES **************************/

}else {
    header('location: /../controllers/indexCtrl.php');
}

/*************************************************************/