<?php
require_once(dirname(__FILE__).'/../utils/init.php'); 

$title='Adel\'Ongle - Reservation';
// titre de page
$metaDesc='Ma prise de rendez-vous - Adel\'Ongle';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/reservation.php');
include(dirname(__FILE__).'/../views/template/footer.php');