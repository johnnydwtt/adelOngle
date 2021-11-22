<?php
require_once(dirname(__FILE__).'/../utils/regex.php');
// appel de regex
require_once(dirname(__FILE__).'/../utils/init.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $day_set = trim(filter_input(INPUT_POST, 'dateH', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    $time_set = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    if(!empty($day_set)){
        
        if (!preg_match('/'. DATE_REGEX .'/',$day_set)){
            $error['dateH'] = 'Saisir une date et une heure valide!';
        }
    } else { 
        $error['dateH'] = 'Ce champ est requis!';
    }
    // ************************************
    // ************************************
    if(!empty($time_set)){

        if (!preg_match('/'. REGEXP_HOUR .'/',$time_set)){
            $error['time'] = 'Saisir un titre valide!';
        }
    } else { 
        $error['time'] = 'Ce champ est requis!';
    }

};

// *****************************
$title='Adel\'Ongle - Panel rendez-vous';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/user/adminPanel.php');
include(dirname(__FILE__).'/../views/template/footer.php');