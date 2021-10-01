<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (!empty($newpassword)){
        if (!preg_match('/'. PASSWORD_REGEX .'/',$newpassword)){
            $error['newpassword'] = 'Mot de passe non valide!';
        }
    } else { 
        $error['password'] = 'Ce champ est requis!';
    }

    if (!empty($oldpassword)){
        if (!preg_match('/'. PASSWORD_REGEX .'/',$oldpassword)){
            $error['oldpassword'] = 'Mot de passe non valide!';
        }
    } else { 
        $error['password'] = 'Ce champ est requis!';
    }
}

$title='Adel\'Ongle - modification du mot de passe';
// titre de page
$metaDesc='je veux changer de mot de passe , eh oui nous sommes obligé défois';
// meta description
$specificCss='/nav.css';


include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'../../views/user/modif-password.php');
include(dirname(__FILE__).'/../views/template/footer.php');
