<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

if(!empty($email)){
    // On test la valeur
    $testmail = filter_var($email, FILTER_VALIDATE_EMAIL);

    if(!$testmail){
        $error['email'] = "Le mail n'est pas valide ";
        }
} else{
    $error['email'] = "Ce champ est requis!";
    }

}

$title='Adel\'Ongle - mot de passe oublié';
// titre de page
$metaDesc='j\ai oublié mon mot de passe , vite je le change';
// meta description
$specificCss='/nav.css';


include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'../../views/user/forgotPassword.php');
include(dirname(__FILE__).'/../views/template/footer.php');
