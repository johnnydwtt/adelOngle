<main>
  <section>
    <form action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>" method="post" id="formLogin">
      <div class="container">
        <div class="row justify-content-center">
          <h1 class="bg-light rounded shadow mb-5">Espace Client</h1>

          

            <div class="col-lg-5 col-12">
              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text">&#x1F464;</span>
                </div>
                <input type="mail" autocomplete="email" value="" name="email" class="form-control input_user" placeholder="Email" pattern="<?=MAIL_REGEX?>"
                  required>
                
              </div>
              <div class="text-danger fw-bold my-2"><?=$errorsArray['email_err'] ?? ''?></div>
              <!-- USERNAME INPUT -->

              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text">&#x1F511;</span>
                </div>
                <input type="password" value="" name="password" class="form-control input_pass"
                  placeholder="Mot de passe" required>
              </div>
              <!-- PASSWORD INPUT -->
            </div>
            <div class="text-danger fw-bold"><?= $errorsArray['global'] ?? '' ?></div>
            <div class="col-lg-12 col-12 mt-4">
              <div class="d-flex justify-content-center links">
                Vous n'avez pas de compte ? <a href="/controllers/create-accountCtrl.php" class="ml-2">S'inscrire</a>
              </div>
              <div class="d-flex justify-content-center links">
                <a href="/controllers/forgot-passwordCtrl.php">Mot de passe oublié?</a>
              </div>
            </div>
            <div class="text-center col-lg-3 col-8 mb-3 mt-3 login_container">
              <input type="submit" value="Connexion" class="btn login_btn">
            </div>
          
        </div>
      </div>
  </form>
  </section>
  <!-- **************************************** -->
</main>