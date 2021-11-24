<main>
    <div class="container-fluid">
        <div class="row justify-content-center text-center text-dark">

            <div class="card">
                <div class="card-header fs-2"><?=htmlentities($_SESSION['customer']->firstname)?> <?=htmlentities($_SESSION['customer']->lastname)?>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <span class="fw-bold">Email:</span> 
                        <?=htmlentities($_SESSION['customer']->mail)?>
                    </p>
                    <p class="card-text">
                    <span class="fw-bold">Téléphone:</span> 
                        <?=htmlentities($_SESSION['customer']->phone_number)?>
                    </p>
                    <p class="card-text"> 
                        <span class="fw-bold">Adresse:</span> 
                        <?=htmlentities($_SESSION['customer']->adress)?> 
                    </p>
                    <p class="card-text"> 
                        <span class="fw-bold">Mot de passe:</span> 
                        ************
                    </p>
                    
                    <a href="/controllers/modifCtrl.php?id=<?=htmlentities($_SESSION['customer']->customer_id)?>">
                    <button class="w-25 btn login_btn">Modifier</button>
                    </a>
            
                </div>
                
            </div>
        </div>
    </div>
</main>