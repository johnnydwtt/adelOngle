<main>
    <section>
        <form action="" method="post">
            <div class="container">
                <div class="row justify-content-center">
                    <h1>Nouveau mot de passe</h1>
                    <p class="bg-light rounded shadow fs-4 mt-4">Changement de mot de passe</p>
                    <div class="col-lg-6">
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F511;</span>
                        </div>
                        <input type="password" id="verif" name="oldpassword" class="form-control input_pass"
                            placeholder="Ancien mot de passe" required><span id="toggle-password"
                            class="eyeStyle">&#x1F441;</span>

                    </div>
                    <p class="text-danger"><?=$error['password'] ?? NULL?></p>
                    </div>
                    
                    <!-- PASSWORD INPUT -->
                    <div class="col-lg-6">
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F511;</span>
                        </div>
                        <input type="password" id="verifPass" name="newpassword" class="form-control input_pass"
                            placeholder="Nouveau mot de passe" required><span
                            id="toggle-verifPass" class="eyeStyle">&#x1F441;</span>
                    </div>
                    <p class="text-danger"><?=$error['confirmPass'] ?? NULL?></p>
                    </div>
                    <!-- PASSWORD VERIF INPUT -->
                    <div class="col-lg-3 col-8 mb-3 mt-3 login_container">
                    <button type="button" name="button" class="btn login_btn">Enregistrer les modifications</button>
                </div>
                </div>

            </div>
        </form>
    </section>
    <!-- **************************************** -->
</main>