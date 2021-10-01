<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

    //On verifie que ce n'est pas vide
    if(!empty($email)){
        // On test la valeur
        $testmail = filter_var($email, FILTER_VALIDATE_EMAIL);

        if(!$testmail){
            $error['email'] = "Le mail n'est pas valide ";
            }
    } else{
        $error['email'] = "Ce champ est requis!";
        }


    if (!empty($password)){
        if (!preg_match('/'. PASSWORD_REGEX .'/',$password)){
            $error['password'] = 'Mot de passe non valide!';
        }
    } else { 
        $error['password'] = 'Ce champ est requis!';
    }

}

$title='Adel\'Ongle - Connexion';
// titre de page
$metaDesc='Ici , je me connecte sur le site Adel\'Ongle';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'../../views/user/loginAccount.php');
include(dirname(__FILE__).'/../views/template/footer.php');