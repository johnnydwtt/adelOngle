<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$metaDesc?>">
    <link rel="stylesheet" href="../../public/assets/css/<?=$specificCss?>">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?=$title?></title>
</head>
<body>
    <!-- navbar DEBUT -->
<header>
<nav class="nav">
        <div class="container-fluid d-flex justify-content-center flex-column bg-light shadow">
            <div >
            <a href="../../controllers/indexCtrl.php"><img class="imgSize" src="/public/assets/img/logo_adelongle.png" alt="Logo adel'ongle prothésiste ongulaire"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="d-flex justify-content-center navlinks">
                    <li class="text-center"><a class="col-lg-3 d-none d-lg-block" href="#">Prestation/prix</a></li>
                    <li class="text-center"><a class="col-lg-3 d-none d-lg-block" href="#">Photos</a></li>
                    <div class="d-flex justify-content-lg-evenly justify-content-center">
                        <li class="text-center">
                            <a class="col-lg-3 col-12 " href="#">Reservation</a>
                        </li>
                        <li class="text-center">
                            <a class="col-lg-3 dropdown-toggle col-12" href="#user" role="button" data-bs-toggle="dropdown" aria-expanded="true">&#x1F469;</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../../controllers/login-accountCtrl.php">Login</a>
                                    <a class="dropdown-item" href="../../controllers/create-accountCtrl.php">Crée un compte</a>
                                </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <!-- navbar FIN -->
