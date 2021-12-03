<?php
require_once(dirname(__FILE__).'/../utils/init.php'); 
require_once(dirname(__FILE__).'/../models/Time_slot.php');
require_once(dirname(__FILE__).'/../config/locale.php'); 

$reads = Time_slot::read();


$title='Adel\'Ongle - Reservation';
// titre de page
$metaDesc='Ma prise de rendez-vous - Adel\'Ongle';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/reservation.php');
include(dirname(__FILE__).'/../views/template/footer.php');