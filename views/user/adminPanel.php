<main>
    <section>
    <form action="" method="post">
        <div class="container bg-light shadow">
            <h1 class="mb-4">Ajouter un rendez-vous</h1>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F464;</span>
                        </div>
                        <input type="datetime-local" name="dateH" value="<?=htmlentities($dateH ?? '')?>"
                            class="form-control input_pass" pattern="<?=DATEH_REGEX?>" placeholder="Prénom" required>
                    </div>
                        <p class="text-danger"><?=$error['dateH'] ?? NULL?></p>
                </div>
                <div class="col-lg-4 col-8 mb-3 mt-3 login_container">
                    <button type="submit" name="button" class="btn login_btn">Je valide</button>
                </div>
            </div>
        </div>
    </form>
    </section>
    <section>
        <div class="container mt-5 bg-light shadow">
            <h2>Ma gestion du calendrier</h2>
            <div class="row justify-content-center">
                <div class="col-8">
                    <div id="calendar">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>