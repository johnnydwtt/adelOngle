<?php
require_once(dirname(__FILE__).'/../utils/init.php'); 
require_once(dirname(__FILE__).'/../models/Time_slot.php');
require_once(dirname(__FILE__).'/../models/Prestation.php');
require_once(dirname(__FILE__).'/../config/locale.php'); 



if (isset($_SESSION['customer'])) {

    // ON RECUPERE LES ID DANS EN GET
    $time_id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));
    $prestation_info = trim(filter_input(INPUT_GET, 'prest', FILTER_SANITIZE_STRING));

    // ****************************
    
    // ON STOCK DANS LES VARIABLES LES ELEMENTS A AFFICHER
    $getTime = Time_slot::get($time_id);

    $prestArray = [];

    $prestation_info = explode(',',$prestation_info);

    foreach ($prestation_info as $prestation) {
        $getPrest = Prestation::get($prestation);
        array_push($prestArray,$getPrest);
    }
    


    // ****************************

    // $prestation_info = filter_input(INPUT_POST, 'prestation', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);


    $title='Adel\'Ongle - Je valide';
    // titre de page
    $metaDesc='Je confirme ma prise de rendez-vous - Adel\'Ongle';
    // meta description
    $specificCss='/nav.css';

    include(dirname(__FILE__).'/../views/template/header.php');
    include(dirname(__FILE__).'/../views/validAppointment.php');
    include(dirname(__FILE__).'/../views/template/footer.php');

} else {

    header('location: /controllers/loginCtrl.php');

}
