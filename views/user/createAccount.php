<main>
  <section>
    <form action="" method="post">
      <div class="container">
        <div class="row justify-content-center ">
          <h1>Création de mon compte</h1>
          <div class="col-lg-6 col-12">
            <p class="bg-light rounded shadow fs-4 mt-4">Informations personnelles</p>
            <div class="col input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="text" name="lastname" value="<?=htmlentities($lastname ?? '')?>" class="form-control input_pass" pattern="<?=STRING_REGEX?>"
                placeholder="Nom" required>
            </div>
            <p class="text-danger"><?=$error['lastname'] ?? NULL?></p>
            <!-- LASTNAME INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="text" name="firstname" value="<?=htmlentities($firstname ?? '')?>" class="form-control input_pass" pattern="<?=STRING_REGEX?>"
                placeholder="Prénom" required>
            </div>
            <p class="text-danger"><?=$error['firstname'] ?? NULL?></p>
            <!-- FIRSTNAME INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="text" name="adress" value="<?=htmlentities($adress ?? '')?>" class="form-control input_pass" pattern="<?=ADRESS_REGEX?>"
                placeholder="Adresse" required>
            </div>
            <p class="text-danger"><?=$error['adress'] ?? NULL?></p>
            <!-- ADRESSE VERIF INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="text" name="postal" value="<?=htmlentities($postal ?? '')?>" class="form-control input_pass" pattern="<?=POSTAL_REGEX?>"
                placeholder="Code Postal" required>
            </div>
            <p class="text-danger"><?=$error['postal'] ?? NULL?></p>
            <!-- CODE POSTAL INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="text" name="city" value="<?=htmlentities($city ?? '')?>" class="form-control input_pass" pattern="<?=STRING_REGEX?>"
                placeholder="Ville" required>
            </div>
            <p class="text-danger"><?=$error['city'] ?? NULL?></p>
            <!-- CITY INPUT -->


            <div class="input-group mb-2 col-lg-12">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="number" name="phone" value="<?=htmlentities($phone ?? '')?>" class="form-control input_pass" pattern="<?=PHONE_REGEX?>"
                placeholder="Téléphone" required>
            </div>
            <p class="text-danger"><?=$error['phone'] ?? NULL?></p>
            <!-- PHONE INPUT -->
          </div>

          <div class="col-lg-6 col-12">
            <p class="bg-light rounded shadow fs-4 mt-4">Informations de connexion</p>
            <div class="col input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="mail" name="email" value="<?=htmlentities($email ?? '')?>" class="form-control input_user" pattern="<?=MAIL_REGEX?>"
                placeholder="Email" required>
            </div>
            <p class="text-danger"><?=$error['email'] ?? NULL?></p>
            <!-- USERNAME INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F511;</span>
              </div>
              <input type="password" id="verif" name="password" class="form-control input_pass" pattern="<?=PASSWORD_REGEX?>"
                placeholder="Mot de passe" required><span id="toggle-password" class="eyeStyle">&#x1F441;</span>
                
            </div>
            <p class="text-danger"><?=$error['password'] ?? NULL?></p>
            <!-- PASSWORD INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F511;</span>
              </div>
              <input type="password" id="verifPass" name="confirmPass" class="form-control input_pass" pattern="<?=PASSWORD_REGEX?>"
                placeholder="Confirmation du mot de passe" required><span id="toggle-verifPass" class="eyeStyle">&#x1F441;</span>
            </div>
            <p class="text-danger"><?=$error['confirmPass'] ?? NULL?></p>
            <!-- PASSWORD VERIF INPUT -->
          </div>

          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customControlInline">
              <label class="custom-control-label" for="customControlInline">j'ai lu et j'accepte les conditions
                générales d'utilisation</label>
            </div>
          </div>


          <div class="col-lg-6 col-8 mb-3 mt-3 login_container">
            <button type="submit" name="button" class="btn login_btn">Crée mon compte</button>
          </div>
        </div>
      </div>
    </form>
  </section>
</main>
<!-- **************************************** -->