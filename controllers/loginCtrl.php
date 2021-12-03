<?php
require_once(dirname(__FILE__) . '/../utils/init.php');
require_once(dirname(__FILE__).'/../utils/connect.php');
require_once(dirname(__FILE__) . '/../models/Customer.php');
require_once(dirname(__FILE__) . '/../utils/regex.php');


$errorsArray = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $mail = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $testmail = filter_var($mail, FILTER_VALIDATE_EMAIL);

    //On verifie que ce n'est pas vide
    if(!empty($mail)){
        // On test la valeur
        if(!$testmail){
            $errorsArray['email_err'] = "Le mail n'est pas valide ";
        }
    }else {
    $errorsArray['email_err'] = "Ce champ est requis!";
    }

    // ***************************************************************
    $password = $_POST['password'];

    $isValidatedCustomer  = Customer::Validated($mail);

    if(!is_null($isValidatedCustomer)){
        $customer = Customer::getByEmail($mail);
        if(!$customer) {
            $errorsArray['global'] = 'Le compte n\'existe pas';
        }else {
            $hash = $customer->password;

            $isVerified = password_verify($password, $hash);
            if($isVerified === true){
                $_SESSION['customer'] = $customer; 
                // header('location: /controllers/indexCtrl.php');
            } else {
                $errorsArray['global'] = 'Votre mot de passe n\'est pas bon!';
            }
        }
        
    } else {
        $errorsArray['global'] = 'Votre compte n\'est pas encore validé!';
    }

}



$title='Adel\'Ongle - Connexion';
// titre de page
$metaDesc='Ici , je me connecte sur le site Adel\'Ongle';
// meta description
$specificCss='/nav.css';





if(isset($_SESSION['customer'])){

    header('Location: indexCtrl.php');

    }else{

    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__).'/../views/user/login.php');
    include(dirname(__FILE__).'/../views/template/footer.php');

    }


