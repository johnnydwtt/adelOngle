<?php
require_once(dirname(__FILE__).'/../utils/regex/regex.php');
// appel de regex

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$adress = trim(filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
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

    if(!empty($lastname)){
        if (!preg_match('/'. STRING_REGEX .'/',$lastname)){
            $error['lastname'] = 'Saisir un prénom valide!';
        }
    } else { 
        $error['lastname'] = 'Ce champ est requis!';
    }
    // CONDITIONS NOM DE FAMILLE

    if(!empty($city)){
        if (!preg_match('/'. STRING_REGEX .'/',$city)){
            $error['city'] = 'Saisir une ville valide!';
        }
    } else { 
        $error['city'] = 'Ce champ est requis!';
    }
    // CONDITIONS VILLE


    if(!empty($adress)){
        if (!preg_match('/'. ADRESS_REGEX .'/',$adress)){
            $error['adress'] = 'Saisir une Adresse valide!';
        }
    } else { 
        $error['adress'] = 'Ce champ est requis!';
    }
    // CONDITIONS ADRESSE

    if(!empty($postal)){
        if (!preg_match('/'. POSTAL_REGEX .'/',$postal)){
            $error['postal'] = 'Saisir un code postal valide!';
        }
    } else { 
        $error['postal'] = 'Ce champ est requis!';
    }
    // CONDITIONS CODE POSTAL

    if(!empty($phone)){
        if (!preg_match('/'. PHONE_REGEX .'/',$phone)){
            $error['phone'] = 'Saisir un Numéro valide!';
        }
    } else { 
        $error['phone'] = 'Ce champ est requis!';
    }

    // CONDITIONS NUMERO DE TELEPHONE
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

    // CONDITIONS EMAIL

    if (!empty($password)){
        if (!preg_match('/'. PASSWORD_REGEX .'/',$password)){
            $error['password'] = 'Mot de passe non valide! il faut moins 8 caractères , 1 majuscule , 1 chiffre et 1 caractère spécicial';
        }
    } else { 
        $error['password'] = 'Ce champ est requis!';
    }

    if($_POST['password'] != $_POST['confirmPass']){
        $error['confirmPass'] = 'les mots de passe doivent-être identiques';
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
if (!empty($error) || $_SERVER['REQUEST_METHOD'] !='POST' ) {
    include(dirname(__FILE__).'../../views/user/createAccount.php');
}else{
    include(dirname(__FILE__).'/accountCtrl.php');
}
include(dirname(__FILE__).'/../views/template/footer.php');
