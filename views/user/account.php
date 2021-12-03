<main>
    <div class="container-fluid">
        <div class="row justify-content-center text-center text-dark">

            <div class="card">
                <div class="card-header fs-2"><?=htmlentities($response->firstname)?> <?=htmlentities($response->lastname)?>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <span class="fw-bold">Email:</span> 
                        <?=htmlentities($response->mail)?>
                    </p>
                    <p class="card-text">
                    <span class="fw-bold">Téléphone:</span> 
                        <?=htmlentities($response->phone_number)?>
                    </p>
                    <p class="card-text"> 
                        <span class="fw-bold">Adresse:</span> 
                        <?=htmlentities($response->adress)?> 
                    </p>
                    <p class="card-text"> 
                        <span class="fw-bold">Mot de passe:</span> 
                        ************
                    </p>
                    
                    <a href="/controllers/modifCtrl.php">
                    <button class="w-25 btn login_btn">Modifier</button>
                    </a>
            
                </div>
                
            </div>
        </div>
    </div>
</main>