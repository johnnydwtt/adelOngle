<main>
    <section>
        <form action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>?id=<?=htmlentities($_SESSION['customer']->customer_id)?>" method="post">
            <div class="container">
                <div class="row justify-content-center flex-column align-items-center">
                    <h1>Nouveau mot de passe</h1>
                    <p class="bg-light rounded shadow fs-4 mt-4">Changement de mot de passe</p>
                        <div class="fw-lighter"><?=$message ?? '';?></div>
                    <div class="col-lg-12">
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F511;</span>
                        </div>
                        <input type="password" id="verif" name="oldpassword" class="form-control input_pass"
                            placeholder="Ancien mot de passe" required><span id="toggle-password"
                            class="eyeStyle">&#x1F441;</span>

                    </div>
                    <p class="text-danger"><?=$error['password'] ?? NULL;?></p>
                    </div>
                    
                    <!-- PASSWORD INPUT -->
                    <div class="col-lg-12">
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F511;</span>
                        </div>
                        <input type="password" id="verifPass" name="newpassword" class="form-control input_pass"
                            placeholder="Nouveau mot de passe" required><span
                            id="toggle-verifPass" class="eyeStyle">&#x1F441;</span>
                    </div>
                    <p class="text-danger"><?=$error['confirmPass'] ?? NULL;?></p>
                    </div>
                    <!-- PASSWORD VERIF INPUT -->

                    <!-- !-- PASSWORD INPUT -->
                    <div class="col-lg-12">
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F511;</span>
                        </div>
                        <input type="password" id="verifPass" name="newpasswordConfirm" class="form-control input_pass"
                            placeholder="Confirmation du mot de passe" required><span
                            id="toggle-verifPass" class="eyeStyle">&#x1F441;</span>
                    </div>
                    <p class="text-danger"><?=$error['confirmPass'] ?? NULL;?></p>
                    </div>
                    <!-- PASSWORD VERIF INPUT -->

                    <div class="col-lg-10 col-8 mb-3 mt-3 login_container">
                    <button type="submit" name="button" class="btn login_btn">Enregistrer les modifications</button>
                </div>
                </div>

            </div>
        </form>
    </section>
    <!-- **************************************** -->
</main>