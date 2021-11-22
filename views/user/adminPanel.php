<main>
    <section>
    <form action="" method="post">
        <div class="container bg-light shadow">
            <h1 class="mb-4">Ajouter un rendez-vous</h1>
            <div class="row justify-content-center">
                
                <div class="col-lg-12 col-8">
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F464;</span>
                        </div>
                        <input type="date" name="date" value="<?=htmlentities($day_set ?? '')?>"
                            class="form-control input_pass" pattern="<?=DATE_REGEX?>" required>
                        </div>
                        <p class="text-danger"><?=$error['date'] ?? NULL?></p>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text">&#x1F464;</span>
                        </div>
                        <input type="time" name="time" min="08:00" max="20:00" value="<?=htmlentities($time_set ?? '')?>"
                            class="form-control input_pass" pattern="<?=REGEXP_HOUR?>" required>
                    </div>
                        <p class="text-danger"><?=$error['time'] ?? NULL?></p>
                </div>
                <div class="col-lg-4 col-8 mb-3 mt-3 login_container">
                    <input type="submit" name="button" value="Validation" class="btn login_btn">
                </div>
            </div>
        </div>
    </form>
    </section>
    <section>
        <div class="container mt-5 bg-light shadow">
            <hr>
            <h2>Ma Gestion Rendez-Vous</h2>
            <hr>
            <div class="row justify-content-center">
                <div class="col-8">
                    <div id="calendar">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>