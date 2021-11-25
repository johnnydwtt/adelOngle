<?php
require_once(dirname(__FILE__) . '/../utils/init.php');

require_once(dirname(__FILE__) . '/../models/Customer.php');

$customer_id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));
$get_token = trim(filter_input(INPUT_GET, 'token', FILTER_SANITIZE_STRING));

$customer = Customer::get($customer_id);
$valid_token = $customer->validated_token;



if($get_token == $valid_token){
    $response = Customer::setValidateAccount($customer_id);
    if($response === true){
        $nbRows = Customer::deleteToken($customer_id);
        if($nbRows==0){
            $message = 'Votre compte a déjà été validé <div class="fs-1">&#129396;</div>';
        } else {
            $message = 'Vous avez bien validé votre compte! <div class="fs-1">&#9989;</div>';
        }
    } else {
        $message = 'Erreur lors de la validation du compte! <div class="fs-1">&#8265;</div>';
    }
} else {
    $message = 'Impossible de valider ce compte! <div class="fs-1">&#128683;</div>';
}



$title='Adel\'Ongle - Validation Compte';
// titre de page
$metaDesc='Validation de compte - Adel\'Ongle';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__) . '/../views/template/header.php');

include(dirname(__FILE__) . '/../views/user/validAccount.php');

include(dirname(__FILE__) . '/../views/template/footer.php');