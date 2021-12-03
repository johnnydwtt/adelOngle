<main>
    <section>
    <form action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>" method="post">
        <div class="container bg-light rounded shadow">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12"">
                        <p class="fs-4 mt-4">J'ai oublie mon mot de passe</p>
                        <div class="col input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">&#x1F464;</span>
                            </div>
                            <input type="mail" name="email" value="<?=htmlentities($email ?? '')?>"
                                class="form-control input_user" pattern="<?=MAIL_REGEX?>" placeholder="Email pour rénitialiser" required>
                        </div>
                        <p class="text-danger"><?=$error['email'] ?? NULL?></p>
                        <!-- EMAIL INPUT -->
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <button type="submit" name="button" class="btn login_btn">Je rénitialise</button>
                </div>
            </div>
        </div>
    <form action="" method="post">
    </section>
</main>