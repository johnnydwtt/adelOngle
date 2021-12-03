<?php
require_once(dirname(__FILE__) . '/../utils/init.php');
require_once(dirname(__FILE__) . '/../models/Prestation.php');


$title='Adel\'Ongle - Accueil';
// titre de page
$metaDesc='De beaux ongles , voici ma spécialitée';
// meta description
$specificCss='/nav.css';


include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/user/accueil.php');
include(dirname(__FILE__).'/../views/template/footer.php');
