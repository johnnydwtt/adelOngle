<main>
    <div class="container-fluid">
        <div class="row justify-content-center text-center text-dark">

            <div class="card">
                <div class="card-header fs-2">Modification du profil
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <span class="fw-bold">Nom:</span> 
                        <input name="lastname" value="<?=htmlentities($read->lastname)?>" type="text" required>
                        <div class="text-danger fw-bold my-2"><?=$error['lastname'] ?? NULL?></div>
                    </p>

                    <p class="card-text">
                    <span class="fw-bold">Prénom:</span> 
                        <input name="firstname" value="<?=htmlentities($read->firstname)?>" type="text" required>
                        <div class="text-danger fw-bold my-2"><?=$error['firstname'] ?? NULL?></div>
                    </p>

                    <p class="card-text">
                    <span class="fw-bold">Email:</span> 
                        <input name="email" value="<?=htmlentities($read->mail)?>" type="mail" required>
                        <div class="text-danger fw-bold my-2"><?=$error['email'] ?? NULL?></div>
                    </p>
                    <p class="card-text">
                    <span class="fw-bold">Téléphone:</span>
                    <input name="phone" value="<?=htmlentities($read->phone_number)?>" type="tel" required>
                    <div class="text-danger fw-bold my-2"><?=$error['phone'] ?? NULL?></div>
                    </p>
                    <p class="card-text"> 
                        <span class="fw-bold">Adresse:</span> 
                        <input name="adress" value="<?=htmlentities($read->adress)?>" type="text" required>
                        <div class="text-danger fw-bold my-2"><?=$error['adress'] ?? NULL?></div>
                    </p>
                    <p class="card-text"> 
                        <span class="fw-bold">Mot de passe:</span> 
                        <a href="/controllers/modifPasswordCtrl.php?id=<?=htmlentities($read->customer_id)?>">
                        <button class="fw-bold text-decoration-underline fs-underline btn">Modifier</button>
                        </a>
                    </p>
                    
                    <a href="/controllers/modifCtrl.php?id=<?=htmlentities($read->customer_id)?>">
                    <button class="w-25 btn login_btn">Enregistrer les modifications</button>
                    </a>
            
                </div>
                
            </div>
        </div>
    </div>
</main>