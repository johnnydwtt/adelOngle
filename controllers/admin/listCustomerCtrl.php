<?php
require_once(dirname(__FILE__) . '/../../models/Customer.php');
require_once(dirname(__FILE__) . '/../../utils/init.php');


// Récupération de la valeur recherchée et on nettoie
$s = trim(filter_input(INPUT_GET, 's', FILTER_SANITIZE_STRING));

// On définit le nombre d'éléments par page grâce à une constante déclarée dans config.php
$limit = NB_ELEMENTS_BY_PAGE;

$nbCustomers = Customer::count($s);
// Calcule le nombre de pages à afficher dans la pagination
$nbPages = ceil($nbCustomers / $limit);

// A recuperer depuis paramètre d'url. Si aucune valeur, alors vaut 1
$currentPage = intval(trim(filter_input(INPUT_GET, 'currentPage', FILTER_SANITIZE_NUMBER_INT)));

if($currentPage <= 0 || $currentPage > $nbPages){
    $currentPage = 1;
}

//Définit à partir de quel enregistrement positionner le curseur (l'offset) dans la requête
$offset = $limit*($currentPage-1);

// Appel à la méthode statique permettant de récupérer les customers selon la recherche et la pagination
$response = Customer::getAll($s,$limit,$offset);
/*************************************************************/

// Si $response appartient à la classe PDOException (Si une exception est retournée),
// on stocke un message d'erreur à afficher dans la vue
if($response instanceof PDOException){
    $message = $response->getMessage();
}
/*************************************************************/

$title='Adel\'Ongle - Liste des clients';
// meta description
$specificCss='/nav.css';

/* ************* AFFICHAGE DES VUES **************************/
if($_SESSION['customer']->role_id == 1){
include(dirname(__FILE__) . '/../../views/template/header.php');
    include(dirname(__FILE__) . '/../../views/user/listCustomer.php');
include(dirname(__FILE__) . '/../../views/template/footer.php');
}else {
    header('location: /../controllers/indexCtrl.php');
}

/*************************************************************/