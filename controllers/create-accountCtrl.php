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
// // appel de de ma class Mail

/*************************************/

// Initialisation du tableau d'erreurs
$error = array();
/*************************************/

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$adress = trim(filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$phone_number = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
$city = trim(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$postal = trim(filter_input(INPUT_POST, 'postal', FILTER_SANITIZE_STRING));
$password = trim(filter_input(INPUT_POST, 'password'));
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

    // PASSWORD
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];

    if($password !== $confirmPass){
        $error['password_error'] = 'Les mots de passe ne correspondent pas';
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }

// ***************************************************************
// ***************************************************************

    if(empty($error)){
        $pdo = Database::getInstance();
        $customer = new Customer($lastname,$firstname,$adress,$mail,$phone_number,$passwordHash);
        $response = $customer->create();
        $id = $pdo->lastInsertId();
        $token = $customer->ValidatedToken();

        $messageError = ERR_EMAIL_EXIST;
    }

        if($response === true){

            $to = $mail;
            $from = SENDER_EMAIL;
            $subject = 'Je valide mon inscription - AdelOngle';
            $fromName = FROM_NAME;
            $toName = $lastname;

            $link = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/controllers/validAccountCtrl.php?id='.$id.'&token='.$token;
            $message = "Bonjour à vous $firstname $lastname,Merci! Veuillez confirmer en cliquant ici $link";

            $mail = new Mail($message,$to,$from,$subject,$fromName,$toName);
            $mail->send();
        }
            
        }

// CONDITIONS MOT DE PASSE

// PASSWORD HASHAGE password_hash($_GET['password'], PASSWORD_DEFAULT);




// *****************************
$title='Adel\'Ongle - Création compte';
// titre de page
$metaDesc='Vos ongles n\'attendent plus que votre inscription';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/user/createAccount.php');
include(dirname(__FILE__).'/../views/template/footer.php');
