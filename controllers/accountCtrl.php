<?php
require_once(dirname(__FILE__).'/../utils/init.php');

require_once(dirname(__FILE__) . '/../models/Customer.php');

// Nettoyage de l'id passé en GET dans l'url
$customer_id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));
/*************************************************************/


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



