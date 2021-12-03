<main>
    <section>
        <div class="container">
            <div class="row justify-content-center text-center flex-column text-dark">

                <div>
                    <p class="bg-light rounded shadow fs-1">Modification du profil</p>

                    <div class="alert alert-warning" role="alert">
                        <?=nl2br($message ?? '')?>
                    </div>
                </div>
            </div>
            <form class="row justify-content-center align-items-center flex-column shadow"
                action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>?id=<?=htmlentities($response->customer_id)?>"
                method="post">

                <div class="col-lg-5 col-12">

                    <p class="card-text">
                        <span class="fw-bold">Nom:</span>
                        <input class="form-control input_pass" name="lastname"
                            value="<?=htmlentities($response->lastname)?>" type="text" pattern="<?=STRING_REGEX?>"
                            required>
                        <div class="text-danger fw-bold my-2"><?=$error['lastname'] ?? NULL?></div>
                    </p>

                    <p class="card-text">
                        <span class="fw-bold">Prénom:</span>
                        <input class="form-control input_pass" name="firstname"
                            value="<?=htmlentities($response->firstname)?>" type="text" pattern="<?=STRING_REGEX?>"
                            required>
                        <div class="text-danger fw-bold my-2"><?=$error['firstname'] ?? NULL?></div>
                    </p>

                    <p class="card-text">
                        <span class="fw-bold">Email:</span>
                        <input class="form-control input_pass" name="email" value="<?=htmlentities($response->mail)?>"
                            type="mail" pattern="<?=MAIL_REGEX?>" required>
                        <div class="text-danger fw-bold my-2"><?=$error['email'] ?? NULL?></div>
                    </p>

                    <p class="card-text">
                        <span class="fw-bold">Téléphone:</span>
                        <input class="form-control input_pass" name="phone"
                            value="<?=htmlentities($response->phone_number)?>" type="tel" pattern="<?=PHONE_REGEX?>"
                            required>
                        <div class="text-danger fw-bold my-2"><?=$error['phone'] ?? NULL?></div>
                    </p>

                    <p class="card-text">
                        <span class="fw-bold">Adresse:</span>
                        <input class="form-control input_pass" name="adress"
                            value="<?=htmlentities($response->adress)?>" type="text" pattern="<?=ADRESS_REGEX?>"
                            required>
                        <div class="text-danger fw-bold my-2"><?=$error['adress'] ?? NULL?></div>
                    </p>

                    <p class="card-text">
                        <span class="fw-bold">Mot de passe:</span>

                        <a href="/controllers/modifPasswordCtrl.php">
                            <span class="w-25 text-decoration-underline hover">Modifier</span>
                        </a>

                    </p>

                </div>
                <div class="col-12 col-lg-11 my-3">
                    <button class="w-25 btn login_btn">Enregistrer les modifications</button>
                </div>


            </form>
        </div>
    </section>
</main>