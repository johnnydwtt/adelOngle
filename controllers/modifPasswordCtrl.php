<?php
require_once(dirname(__FILE__).'/../utils/init.php');
require_once(dirname(__FILE__).'/../models/Customer.php');
// appel du models Customer

$customer_id = intval($_SESSION['customer']->customer_id);
$error = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $newpasswordConfirm = $_POST['newpasswordConfirm'];



    if (!empty($oldpassword)) {
        $hash = $_SESSION['customer']->password;
        $verified = password_verify($oldpassword,$hash);

        if ($verified == false) {
            $error['password'] = 'password incorrect';
        }
        
    }


    if($newpassword !== $newpasswordConfirm){
        $error['password_error'] = 'Les mots de passe ne correspondent pas';
    } else {
        $passwordHash = password_hash($newpassword, PASSWORD_DEFAULT);
    }

    if (empty($error)) {

        $passwordChange = Customer::ChangePassword($customer_id,$passwordHash);

        if ($passwordChange == true) {
            $message = MDP_VALID;
            $_SESSION['customer']->password = $passwordChange;
        } else {
            $message = MDP_NOT_VALID;
        }
        
    }
        
}

$title='Adel\'Ongle - modification du mot de passe';
// titre de page
$metaDesc='AdelOngle - J\'ai oublié mon mot de passe , il faut que je le change';
// meta description
$specificCss='/nav.css';


if(isset($_SESSION['customer'])){
include(dirname(__FILE__).'/../views/template/header.php');
include(dirname(__FILE__).'/../views/user/modif-password.php');
include(dirname(__FILE__).'/../views/template/footer.php');
}else{
    die;
    header('location: /controllers/indexCtrl.php');
}


