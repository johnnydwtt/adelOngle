<main>
  <section>
    <form action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>" method="post">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-12">
            <p class="bg-light rounded shadow fs-4 mt-4">Informations personnelles</p>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="text" name="lastname" value="<?=htmlentities($lastname ?? '')?>" class="form-control input_pass" pattern="<?=STRING_REGEX?>"
                placeholder="Nom" required>
            </div>
            <div class="text-danger fw-bold my-2"><?=$error['lastname'] ?? NULL?></div>
            <!-- LASTNAME INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="text" name="firstname" value="<?=htmlentities($firstname ?? '')?>" class="form-control input_pass" pattern="<?=STRING_REGEX?>"
                placeholder="Prénom" required>
            </div>
            <div class="text-danger fw-bold my-2"><?=$error['firstname'] ?? NULL?></div>
            <!-- FIRSTNAME INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#127968;</span>
              </div>
              <input type="text" name="adress" value="<?=htmlentities($adress ?? '')?>" class="form-control input_pass" pattern="<?=ADRESS_REGEX?>"
                placeholder="Adresse" required>
            </div>
            <div class="text-danger fw-bold my-2"><?=$error['adress'] ?? NULL?></div>
            <!-- ADRESSE VERIF INPUT -->


            <div class="input-group mb-2 col-lg-12">
              <div class="input-group-append">
                <span class="input-group-text">&#9742;</span>
              </div>
              <input type="number" name="phone" value="<?=htmlentities($phone_number ?? '')?>" class="form-control input_pass" pattern="<?=PHONE_REGEX?>"
                placeholder="Téléphone" required>
            </div>
            <div class="text-danger fw-bold my-2"><?=$error['phone'] ?? NULL?></div>
            <!-- PHONE INPUT -->
          </div>

          <div class="col-lg-6 col-12">
            <p class="bg-light rounded shadow fs-4 mt-4">Informations de connexion</p>
            <div class="text-access fw-bold my-2"><?=htmlentities($messageOk ?? '')?></div>
            <div class="text-danger fw-bold my-2"><?=htmlentities($messageError ?? '')?></div>
            <div class="col input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text">&#128231;</span>
              </div>
              <input type="mail" name="email" class="form-control input_user" pattern="<?=MAIL_REGEX?>"
                placeholder="Email" required>
            </div>
            <div class="text-danger fw-bold my-2"><?=$error['email'] ?? NULL?></div>
            <!-- USERNAME INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F511;</span>
              </div>
              <input type="password" id="verif" name="password" class="form-control input_pass"
                placeholder="Mot de passe" required><span id="toggle-password" class="eyeStyle">&#x1F441;</span>
                
            </div>
            <div class="text-danger fw-bold my-2"><?=$error['password'] ?? NULL?></div>
            <!-- PASSWORD INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F511;</span>
              </div>
              <input type="password" id="verifPass" name="confirmPass" class="form-control input_pass"
                placeholder="Confirmation du mot de passe" required><span id="toggle-verifPass" class="eyeStyle">&#x1F441;</span>
            </div>
            <div class="text-danger fw-bold my-2"><?=$error['password_error'] ?? NULL?></div>
            <!-- PASSWORD VERIF INPUT -->
          </div>


          <div class="col-lg-6 col-8 mb-3 mt-3 login_container">
          <input type="submit" value="Inscription" class="btn login_btn">
          <div class="form-group">
            <div class="custom-control custom-checkbox mt-3">
              <label class="custom-control-label" for="customControlInline">En cliquant sur Inscription j'accepte <span class="fw-lighter text-decoration-underline lightblue">les conditions
                générales d'utilisation</span>.</label>
            </div>
          </div>

          </div>
          
          

        </div>
      </div>
    </form>
  </section>
</main>
<!-- **************************************** -->