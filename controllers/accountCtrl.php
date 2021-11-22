<?php
require_once(dirname(__FILE__).'/../utils/init.php');

$title='Adel\'Ongle - Mon Compte';
// titre de page
$metaDesc='Mon espace client - Adel\'Ongle';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/user/account.php');
include(dirname(__FILE__).'/../views/template/footer.php');

