<?php
require_once(dirname(__FILE__).'/../utils/init.php');
/*************************************/

require_once(dirname(__FILE__).'/../utils/connect.php');
// appel de mon singleton
require_once(dirname(__FILE__).'/../utils/regex.php');
// appel de regex

/*************************************/

require_once(dirname(__FILE__).'/../models/Customer.php');
// appel de de ma class Customer
require_once(dirname(__FILE__) . '/../class/Mail.php');
/*************************************/

// Initialisation du tableau d'erreurs
$error = array();
/*************************************/

$customer_id = intval($_SESSION['customer']->customer_id);


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$adress = trim(filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$phone_number = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
// nettoyage

    if(!empty($firstname)){

        if (!preg_match('/'. STRING_REGEX .'/',$firstname)){
            $error['firstname'] = 'Saisir un prénom valide!';
        }
    } else { 
        $error['firstname'] = 'Ce champ est requis!';
    }
    // CONDITIONS PRENOM
// ***************************************************************
// ***************************************************************

    if(!empty($lastname)){
        if (!preg_match('/'. STRING_REGEX .'/',$lastname)){
            $error['lastname'] = 'Saisir un prénom valide!';
        }
    } else { 
        $error['lastname'] = 'Ce champ est requis!';
    }
    // CONDITIONS NOM DE FAMILLE
// ***************************************************************
// ***************************************************************

    if(!empty($adress)){
        if (!preg_match('/'. ADRESS_REGEX .'/',$adress)){
            $error['adress'] = 'Saisir une Adresse valide!';
        }
    } else { 
        $error['adress'] = 'Ce champ est requis!';
    }
    // CONDITIONS ADRESSE

// ***************************************************************
// ***************************************************************

    if(!empty($phone_number)){
        if (!preg_match('/'. PHONE_REGEX .'/',$phone_number)){
            $error['phone'] = 'Saisir un Numéro valide!';
        }
    } else { 
        $error['phone'] = 'Ce champ est requis!';
    }
// ***************************************************************
// ***************************************************************

    // CONDITIONS NUMERO DE TELEPHONE
    $mail = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

    //On verifie que ce n'est pas vide
    if(!empty($mail)){
        // On test la valeur
        $testmail = filter_var($mail, FILTER_VALIDATE_EMAIL);

        if(!$testmail){
            $error['email'] = "Le mail n'est pas valide ";
            }
    } else{
        $error['email'] = "Ce champ est requis!";
        }

    // CONDITIONS EMAIL

// ***************************************************************
// ***************************************************************

    if(empty($error)){    

        $customer = new Customer($lastname,$firstname,$adress,$mail,$phone_number);

        $response = $customer->update($customer_id);
        
        // Si $response appartient à la classe PDOException (Si une exception est retournée),
        // on stocke un message d'erreur à afficher dans la vue
        if($response instanceof PDOException){
            $message = $response->getMessage();
        } else {
            $message = MSG_UPDATE_CLIENT_OK;
        }
        
    
}

}

$response = Customer::get($customer_id);

// Si $response appartient à la classe PDOException (Si une exception est retournée),
// on stocke un message d'erreur à afficher dans la vue
if($response instanceof PDOException){
    $message = $response->getMessage();
}

$title='Adel\'Ongle - Modification du profil';
// titre de page
$metaDesc='Je modifie mon profil - Adel\'Ongle';
// meta description
$specificCss='/nav.css';

if(isset($_SESSION['customer'])){
    
    include(dirname(__FILE__) . '/../views/template/header.php');
    include(dirname(__FILE__) . '/../views/user/modif.php');
    include(dirname(__FILE__) . '/../views/template/footer.php');
}else{
    header('location: /controllers/indexCtrl.php');
}

