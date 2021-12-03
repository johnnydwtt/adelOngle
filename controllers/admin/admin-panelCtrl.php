<?php
require_once(dirname(__FILE__).'/../../utils/regex.php');
require_once(dirname(__FILE__).'/../../utils/connect.php');
require_once(dirname(__FILE__).'/../../models/Customer.php');
require_once(dirname(__FILE__).'/../../models/Appointment.php');
require_once(dirname(__FILE__).'/../../models/Time_slot.php');
// appel de regex
require_once(dirname(__FILE__).'/../../utils/init.php');

// Initialisation du tableau d'erreurs
$errorsArray = array();
$error = array();
/*************************************/

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
    $time = trim(filter_input(INPUT_POST, 'time', FILTER_SANITIZE_STRING));
    
    $datetime = $date . ' ' . $time;



    if(!empty($date)){
        
        if (!preg_match('/'. REGEXP_DATE .'/',$date)){
            $error['date'] = 'Saisir une date!';
        }
    } else { 
        $error['date'] = 'Ce champ est requis!';
    }
    // ************************************
    // ************************************
    if(!empty($time)){

        if (!preg_match('/'. REGEXP_HOUR .'/',$time)){
            $error['time'] = 'Saisir une date valide!';
        }
    } else { 
        $error['time'] = 'Ce champ est requis!';
    }


    if(empty($errorsArray)){
        $pdo = Database::getInstance();
        // ************************
        $time_slot = new Time_slot($datetime);
        $response = $time_slot->create();

        if(!$response){
            $message = 'Problème d\'enregistrement';
        } else {
            $message = 'Rendez-vous bien enregister';
        }

    }
    
}
// *****************************
$title='Adel\'Ongle - Panel rendez-vous';
// meta description
$specificCss='/nav.css';

if($_SESSION['customer']->role_id == 1){
    include(dirname(__FILE__).'/../../views/template/header.php');
    include(dirname(__FILE__).'/../../views/user/adminPanel.php');
    include(dirname(__FILE__).'/../../views/template/footer.php');


} else {
    header('location: /controllers/indexCtrl.php');
}

