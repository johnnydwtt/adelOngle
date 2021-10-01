<main>
  <section>
    <form action="" method="post">
      <div class="container">
        <div class="row justify-content-center">
          <h1>Espace Client</h1>
          <p class="bg-light rounded shadow fs-4 mt-4">Informations de connexion</p>
          
            <div class="col-lg-5 col-12">
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <span class="input-group-text">&#x1F464;</span>
                </div>
                <input type="mail" name="email" class="form-control input_user" pattern="<?=MAIL_REGEX?>" placeholder="Email"
                  required>
              </div>
              <!-- USERNAME INPUT -->

              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text">&#x1F511;</span>
                </div>
                <input type="password" name="password" class="form-control input_pass" pattern="<?=PASSWORD_REGEX?>"
                  placeholder="Mot de passe" required>
              </div>
              <!-- PASSWORD INPUT -->
            </div>
            <div class="col-lg-5 col-12 mt-4">
              <div class="d-flex justify-content-center links">
                Vous n'avez pas de compte ? <a href="/controllers/create-accountCtrl.php" class="ml-2">S'inscrire</a>
              </div>
              <div class="d-flex justify-content-center links">
                <a href="#">Mot de passe oublié?</a>
              </div>
            </div>
            <div class="col-lg-3 col-8 mb-3 mt-3 login_container">
                  <button type="button" name="button" class="btn login_btn">Connexion</button>
            </div>
          
        </div>
      </div>
  </form>
  </section>
  <!-- **************************************** -->
</main>