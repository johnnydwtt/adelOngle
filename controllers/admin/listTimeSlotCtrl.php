<?php
require_once(dirname(__FILE__) . '/../../models/Time_Slot.php');
require_once(dirname(__FILE__) . '/../../utils/init.php');


$reads = Time_slot::read();


$title='Adel\'Ongle - Liste des clients';
// meta description
$specificCss='/nav.css';


if($_SESSION['customer']->role_id == 1){
    include(dirname(__FILE__) . '/../../views/template/header.php');
        include(dirname(__FILE__) . '/../../views/user/listTimeSlot.php');
    include(dirname(__FILE__) . '/../../views/template/footer.php');
    }else {
        header('location: /../controllers/indexCtrl.php');
    }
    