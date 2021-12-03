<?php

define('DSN', 'mysql:host=localhost;dbname=c296adelongle;charset=utf8');
define('LOGIN', 'c296dewittej');
define('PASSWORD', '3hzUqZE@');
define('NB_ELEMENTS_BY_PAGE', 10);

define('SENDER_EMAIL', 'joh.dewitte@hotmail.com');
define('FROM_NAME', 'Adel\'Ongle');

define('ERR_EMAIL_EXIST', 'L\'email existe déjà');





// Définition des constantes retournées par les méthodes
define('ERR_UNKNOWN', 'Une erreur inconnue s\'est produite'); 

define('ERR_DATABASE', 'Problème de connexion à la base de données');
define('ERR_PDO', 'Une erreur SQL s\'est produite');

define('MSG_CREATE_CLIENT_OK', 'Votre compte à bien été ajouté');
define('ERR_CREATE_CLIENTT_NOTOK', 'Le client n\'a pas été enregistré en base de données');
define('ERR_CLIENTEXIST', 'Ce compte existe déjà');
define('ERR_CLIENT_NOT_FOUND', 'Le client n\'a pas été trouvé');
define('MSG_UPDATE_CLIENT_OK', 'Votre compte à bien été mis à jour');
define('ERR_UPDATE_CLIENT_NOTOK', 'Votre compte n\'a pas été mis à jour');
define('OK_EMAIL', 'Votre compte à bien été crée, merci de le validé vers votre boite mail');


define('ERR_CREATE_APPOINTMENT_NOTOK', 'Le rdv n\'a pas été créé');
define('MSG_CREATE_RDV_OK', 'Le rdv a bien été créé');
define('ERR_UPDATE_RDV_NOTOK', 'Le rdv n\'a pas été mis à jour');
define('MSG_UPDATE_RDV_OK', 'Le rdv a bien été mis à jour');
define('MSG_DELETE_RDV_APPOINTMENT_OK', 'Le rdv a bien été supprimé');
define('ERR_DELETE_RDV_APPOINTMENT_NOTOK', 'Le rdv n\'a pas été supprimé');

define('MSG_DELETE_CLIENT_OK', 'Le client et ses rdv ont été supprimés');
define('ERR_DELETE_CLIENT_NOTOK', 'Le client et ses rdv n\'ont pas été supprimés');

define('MSG_CREATE_CLIENT_APT_OK', 'Le client et ses rdv ont été créés simultanément');
define('ERR_CREATE_CLIENT_APT_NOTOK', 'Le client et ses rdv n\'ont pas été créés');

define('MDP_VALID', 'Le mot de passe à bien été mis à jour');
define('MDP_NOT_VALID', 'Le mot de passe n\'a pas été mis à jour');


define('ERR_PRESTA_EXIST', 'Problème dans votre selection');















