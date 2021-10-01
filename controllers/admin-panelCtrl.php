<?php
require_once(dirname(__FILE__).'/../utils/regex/regex.php');
// appel de regex

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $date = trim(filter_input(INPUT_POST, 'dateH', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    if(!empty($date)){

        if (!preg_match('/'. DATEH_REGEX .'/',$date)){
            $error['dateH'] = 'Saisir une date et une heure valide!';
        }
    } else { 
        $error['dateH'] = 'Ce champ est requis!';
    }

}

// *****************************
$title='Adel\'Ongle - Panel rendez-vous';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/user/adminPanel.php');
include(dirname(__FILE__).'/../views/template/footer.php');