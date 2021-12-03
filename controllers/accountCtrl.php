<?php
require_once(dirname(__FILE__).'/../utils/init.php');

require_once(dirname(__FILE__) . '/../models/Customer.php');

// Nettoyage de l'id passé en GET dans l'url
$customer_id = intval($_SESSION['customer']->customer_id);
/*************************************************************/

$response = Customer::get($customer_id);

// Si $response appartient à la classe PDOException (Si une exception est retournée),
// on stocke un message d'erreur à afficher dans la vue
if($response instanceof PDOException){
    $message = $response->getMessage();
}

$title='Adel\'Ongle - Mon Compte';
// titre de page
$metaDesc='Mon espace client - Adel\'Ongle';
// meta description
$specificCss='/nav.css';

if(isset($_SESSION['customer'])){
    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__).'/../views/user/account.php');
    include(dirname(__FILE__).'/../views/template/footer.php');


} else {
    header('location: /controllers/indexCtrl.php');
}



