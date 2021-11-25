<?php
require_once(dirname(__FILE__).'/../utils/init.php');
require_once(dirname(__FILE__).'/../models/Customer.php');
// appel du models Customer

$customer_id = intval(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $oldpassword = $_SESSION['customer']->password ;

    if ($oldpassword == $_SESSION['customer']->password) {
        
        if (isset($oldpassword)) {
            $error['password_error'] = 'Votre mot de passe n\'est pas correct';
        }else {

            $newpassword = $_POST['newpassword'];
            $newpasswordConfirm = $_POST['newpasswordConfirm'];

            if($password !== $confirmPass){
                $error['password_error'] = 'Les mots de passe ne correspondent pas';
            } else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            }

        }

        if(empty($error)){    
    
            $customer = new Customer($password);
    
            $response = $customer->ChangePassword($customer_id);
            
            // Si $response appartient à la classe PDOException (Si une exception est retournée),
            // on stocke un message d'erreur à afficher dans la vue
            if($response instanceof PDOException){
                $message = $response->getMessage();
            } else {
                $message = MSG_UPDATE_CLIENT_OK;
            }
        }
    }else{
        $message = 'Mot de passe incorrect';
    }
    
        
}

$title='Adel\'Ongle - modification du mot de passe';
// titre de page
$metaDesc='AdelOngle - J\'ai oublié mon mot de passe , il faut que je le change';
// meta description
$specificCss='/nav.css';


include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/user/modif-password.php');
include(dirname(__FILE__).'/../views/template/footer.php');
