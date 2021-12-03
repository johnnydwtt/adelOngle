<?php
require_once(dirname(__FILE__).'/../utils/init.php'); 
require_once(dirname(__FILE__).'/../models/Time_slot.php');
require_once(dirname(__FILE__).'/../models/Prestation.php');
require_once(dirname(__FILE__).'/../config/locale.php'); 


if (isset($_SESSION['customer'])) {

    // ID DU CHOIX DE LA DATE 
    $time_id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));
    $get = Time_slot::get($time_id);
    // ****************************


    // ON AFFICHE LA TABLE DE PRESTA
    $getPrest = Prestation::getAll();
    // ****************************


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $prestation_info = filter_input(INPUT_POST, 'prestation', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);

        if(empty($prestation_info)){
            $error['prestation'] = 'Choisir au moins 1 préstation!';
        }else{
            $prestation_info = implode(',' ,$prestation_info);
        }

        if(empty($error)){
            header('location: /controllers/validAppointmentCtrl.php?id='.$time_id.'&prest='.$prestation_info);
            exit;
        }
        
    }
    
    
    $title='Adel\'Ongle - Reservation';
    // titre de page
    $metaDesc='Je selectionne mes préstations - Adel\'Ongle';
    // meta description
    $specificCss='/nav.css';

    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__).'/../views/prestation.php');
    include(dirname(__FILE__).'/../views/template/footer.php');

} else {

    header('location: /controllers/loginCtrl.php');

}


