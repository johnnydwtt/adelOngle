<main>
  <section>
    <form action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>" method="post" id="formLogin">
      <div class="container">
        <div class="row justify-content-center">
          <h1>Espace Client</h1>
          <div class="text-danger fw-bold"><?= $errorsArray['global'] ?? '' ?></div>
          <p class="bg-light rounded shadow fs-4 mt-4">Informations de connexion</p>

          

            <div class="col-lg-5 col-12">
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <span class="input-group-text">&#x1F464;</span>
                </div>
                <input type="mail" autocomplete="email" name="email" class="form-control input_user" placeholder="Email"
                  required>
                <div class="invalid-feedback-2"><?=$errorsArray['email'] ?? ''?></div>
              </div>
              <!-- USERNAME INPUT -->

              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text">&#x1F511;</span>
                </div>
                <input type="password" name="password" class="form-control input_pass"
                  placeholder="Mot de passe" required>
              </div>
              <!-- PASSWORD INPUT -->
            </div>
            <div class="col-lg-5 col-12 mt-4">
              <div class="d-flex justify-content-center links">
                Vous n'avez pas de compte ? <a href="/controllers/create-accountCtrl.php" class="ml-2">S'inscrire</a>
              </div>
              <div class="d-flex justify-content-center links">
                <a href="/controllers/forgot-passwordCtrl.php">Mot de passe oublié?</a>
              </div>
            </div>
            <div class="col-lg-3 col-8 mb-3 mt-3 login_container">
              <input type="submit" value="Connexion" class="btn login_btn">
            </div>
          
        </div>
      </div>
  </form>
  </section>
  <!-- **************************************** -->
</main>