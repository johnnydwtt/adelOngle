<main>
    <section>
    <form action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>" method="post">
      <div class="container">
        <div class="row justify-content-center ">
          <h1>Modification de mes information</h1>
          <div class="col-lg-6 col-12">
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
              <input type="number" name="phone" value="<?=htmlentities($phone_number ?? '')?>" class="form-control input_pass" pattern="<?=PHONE_REGEX?>"
                placeholder="Téléphone" required>
            </div>
            <p class="text-danger"><?=$error['phone'] ?? NULL?></p>
            <!-- PHONE INPUT -->
          </div>

          <div class="col-lg-6 col-12">
            <div class="col input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F464;</span>
              </div>
              <input type="mail" name="email" value="<?=htmlentities($mail ?? '')?>" class="form-control input_user" pattern="<?=MAIL_REGEX?>"
                placeholder="Email" required>
            </div>
            <p class="text-danger"><?=$error['email'] ?? NULL?></p>
            <!-- USERNAME INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F511;</span>
              </div>
              <input type="password" id="verif" name="password" class="form-control input_pass"
                placeholder="Mot de passe" required><span id="toggle-password" class="eyeStyle">&#x1F441;</span>
                
            </div>
            <p class="text-danger"><?=$error['password'] ?? NULL?></p>
            <!-- PASSWORD INPUT -->

            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text">&#x1F511;</span>
              </div>
              <input type="password" id="verifPass" name="confirmPass" class="form-control input_pass"
                placeholder="Confirmation du mot de passe" required><span id="toggle-verifPass" class="eyeStyle">&#x1F441;</span>
            </div>
            <p class="text-danger"><?=$error['password_error'] ?? NULL?></p>
            <!-- PASSWORD VERIF INPUT -->
          </div>

          <div class="col-lg-6 col-8 mb-3 mt-3 login_container">
          <input type="submit" value="Modification" class="btn login_btn">
          </div>

        </div>
      </div>
    </form>
    </section>
</main>