<main>
    <section>
    <form action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>" method="post">
    <div class="text-center my-3 fs-4 text-access"><?=htmlentities($message ?? '')?>&#10004;</div>
        <div class="container bg-light shadow">
            <h1 class="mb-4">Ajouter un rendez-vous</h1>
            <div class="row justify-content-center">
                
                <div class="col-lg-12 col-8">
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F464;</span>
                        </div>
                        <input type="date" name="date"
                            class="form-control input_pass" pattern="<?=REGEXP_DATE?>" required>
                        </div>
                        <p class="text-danger"><?=$error['date'] ?? NULL?></p>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F464;</span>
                        </div>
                        <input type="time" name="time" min="08:00" max="20:00"
                            class="form-control input_pass" pattern="<?=REGEXP_HOUR?>" required>
                    </div>
                        <p class="text-danger"><?=$error['time'] ?? NULL?></p>
                </div>
                <div class="col-lg-4 col-8 my-3 login_container">
                    <input type="submit" name="button" value="Validation" class="btn login_btn">
                </div>
            </div>
        </div>
    </form>
    </section>
    <section>
        <div class="container mt-5 bg-light shadow">
            <hr>
            <h2>Mon menu gestion</h2>
            <hr>
            <div class="row justify-content-center">
                <div class="col-3 my-3">
                    <a href="/controllers/admin/listCustomerCtrl.php"><button class="btn login_btn">Gestion Client</button></a>
                </div>
                <div class="col-3 my-3">
                    <a href="/controllers/admin/listTimeSlotCtrl.php"><button class="btn login_btn">Gestion Créneaux</button></a>
                </div> 
            </div>
        </div>
    </section>
</main>