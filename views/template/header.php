<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$metaDesc?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/assets/css/<?=$specificCss?>">
    <link rel="stylesheet" href="../../public/librairies/fullcalendar/main.min.css">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <title><?=$title?></title>
</head>
<body>
    <!-- navbar DEBUT -->
<header>
<nav class="nav">
        <div class="container-fluid d-flex justify-content-center flex-column bg-light shadow">
            <div >
            <a href="/controllers/indexCtrl.php"><img class="imgSize" src="/public/assets/img/logo_adelongle.png" alt="Logo adel'ongle prothésiste ongulaire"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="d-flex justify-content-center navlinks">
                    <li class="text-center"><a class="col-lg-3 d-none d-lg-block" href="/controllers/indexCtrl.php?#prestation">Prestation/prix</a></li>
                    <li class="text-center"><a class="col-lg-3 d-none d-lg-block" href="/controllers/indexCtrl.php?#photos">Photos</a></li>
                    <div class="d-flex justify-content-lg-evenly justify-content-center">
                        <li class="text-center">
                            <a class="col-lg-3 col-12" href="/controllers/reservationCtrl.php">Reservation</a>
                        </li>
                        <li class="text-center">
                            <?php
                                if(!isset($_SESSION['customer'])){
                            ?>
                            <a class="col-lg-3 dropdown-toggle col-12 fs-2" role="button" data-bs-toggle="dropdown" aria-expanded="true">&#x1F469;</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/controllers/loginCtrl.php">Login</a>
                                    <a class="dropdown-item" href="/controllers/create-accountCtrl.php">Crée un compte</a>
                                </div>
                            <?php 
                                }elseif($_SESSION['customer']->role_id == 1){ 
                            ?>

                                <a class="col-lg-3 dropdown-toggle col-12 fs-2" role="button" data-bs-toggle="dropdown" aria-expanded="true">&#128133;</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/controllers/admin/admin-panelCtrl.php">Admin</a>
                                    <a class="dropdown-item" href="/controllers/accountCtrl.php">Profil</a>
                                    <a class="dropdown-item" href="/controllers/disconnectCtrl.php">Déconnexion</a>
                                </div>

                            <?php 
                                }elseif($_SESSION['customer']->role_id == 2){ 
                            ?>
                        
                                <a class="col-lg-3 dropdown-toggle col-12 fs-2" role="button" data-bs-toggle="dropdown" aria-expanded="true">&#128133;</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/controllers/accountCtrl.php">Profil</a>
                                    <a class="dropdown-item" href="/controllers/disconnectCtrl.php">Déconnexion</a>
                                </div>
                            <?php } ?> 
                        </li> 
                            
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <!-- navbar FIN -->
