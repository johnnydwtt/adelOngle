<div class="container-fluid">
    <div class="row justify-content-center text-center">
        <h1 class="bg-light shadow">Mon Compte</h1>
    </div>
    <div class="row justify-content-lg-start text-dark">
        <div class="col-lg-12 col-12 mt-4 fw-bold text-center">Nom: <span class="text-secondary"><?=$lastname?></span></div>
        <div class="col-lg-12 col-12 fw-bold text-center">Prénom: <span class="text-secondary"><?=$firstname?></span> </div>
        <div class="col-lg-12 col-12 fw-bold text-center">Adresse: <span class="text-secondary"><?=$adress.' , '.$city.' '.$postal?></span></div>
        <div class="col-lg-12 col-12 fw-bold text-center">Numéro de téléphone: <span class="text-secondary"><?=$phone?></span></div>
        <div class="col-lg-12 col-12 fw-bold text-center">Email: <span class="text-secondary"><?=$mail?></span></div>
        <div class="col-lg-12 col-12 fw-bold text-center">Mot de passe: <span type="password" class="text-secondary"><button class="shadow border btn">Modifier</button></span></div>
    </div>
</div>