<?php
require_once(dirname(__FILE__).'/../utils/init.php');

$title='Adel\'Ongle - Modification du profil';
// titre de page
$metaDesc='Je modifie mon profil - Adel\'Ongle';
// meta description
$specificCss='/nav.css';

include(dirname(__FILE__) . '/../views/template/header.php');

include(dirname(__FILE__) . '/../views/user/modif.php');

include(dirname(__FILE__) . '/../views/template/footer.php');