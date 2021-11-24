<?php
require_once(dirname(__FILE__).'/../utils/init.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $oldpassword = $_SESSION['customer']->password ;

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
    
        
}

$title='Adel\'Ongle - modification du mot de passe';
// titre de page
$metaDesc='AdelOngle - J\'ai oublié mon mot de passe , il faut que je le change';
// meta description
$specificCss='/nav.css';


include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/user/modif-password.php');
include(dirname(__FILE__).'/../views/template/footer.php');
