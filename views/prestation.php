<main>
<form action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>?id=<?=$get->time_id?>" method="post">
    <div class="container shadow py-2">
        <div class="row justify-content-center align-items-center mb-5 pt-3 fs-4">
            <div class="col-12 col-lg-4 d-lg-block text-center border-end border-dark"> Je choisie mon rendez-vous
            </div>
            <div class="col-4 col-lg-4 d-none d-lg-block text-center border-end border-dark">
                <span
                    class="firstColor rounded py-2 px-2 text-white">Je choisis ma Prestation</span></div>
            <div class="col-4 col-lg-4 d-none d-lg-block text-center">Je Valide</div>
        </div>

        <?php $dateFormat = strftime('%e %B %G à %Hh%M', strtotime($get->datetime));?>

        <div class="fs-5 col-lg-3 col-12 border-bottom border-top border-end rounded">
            <div class="fw-bold">Rendez-vous:</div>
            <div class="text-end"><?=$dateFormat?></div>
        </div>

        <div class="row justify-content-center align-items-center">
        
                <h4 class="text-center my-3">Je choisis ma prestation :</h4>
                <p class=" text-center alert alert-danger fs-4"><?=$error['prestation'] ?? Null?></p>
                <?php foreach($getPrest as $prest) { ?>

                    <div class="col-lg-3 shadow mx-2 my-2 py-3">
                        <div class="form-check d-flex flex-column justify-content-center align-items-center">

                            <label for="prestation" class="fs-6"><?=$prest->prestation?> <span class="fst-italic"><?=$prest->description?></span></label>

                            <div class="d-flex justify-content-end align-items-center fs-5">
                                <?=$prest->price?>€
                                <input class="form-check-input" type="checkbox" name="prestation[]" value="<?=$prest->prestation_id?>" id="flexCheckDefault">
                            </div>

                        </div>
                    </div>

                <?php } ?>
        </div>
    

            <div class="row justify-content-around mt-5">
                <div class="col-lg-2">
                    <a href="/controllers/reservationCtrl.php">
                        <input class="btn secret_btn fs-5" type="button" value="RETOUR">
                    </a>
                </div>
                <div class="col-lg-2">

                    <input class="btn login_btn fs-5" type="submit" value="VALIDER">
                </div>
            </div>
        </div>
    </form>
</main>