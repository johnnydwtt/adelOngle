<?php
require_once(dirname(__FILE__).'/../utils/init.php');

$title='Adel\'Ongle - Erreur 404';
// titre de page
$metaDesc='Mauvais chemin , mauvaise endroit';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../404.php');
include(dirname(__FILE__).'/../views/template/footer.php');