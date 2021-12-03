<main>
    <form action="<?=htmlspecialChars($_SERVER['PHP_SELF'])?>" method="post">
    <div class="container shadow py-2">
        <div class="row flex-column justify-content-center align-items-center fs-4">
<?php $dateFormat = strftime('%e %B %G à %Hh%M', strtotime($getTime->datetime));?>

            <div class="col-lg-6 col-12 text-center">
                <h3>Date du rendez-vous:</h3>
                <p><?=$dateFormat?></p>
            </div>
            <div class="col-lg-6 col-12">
            <h3 class="">Prestation:</h3>
                <ul>
                    <?php foreach($prestArray as $prest) { ?>
                        <li class="text-start"><?=$prest->prestation?> , <?=$prest->price?>€ 
                        <span class="fst-italic"><?=$prest->description?></span>
                        </li>
                    <?php } ?>
                </ul>
                
            </div>



        
            <div class="col-lg-2 col-12">
                <input class="btn login_btn" type="submit" value="J'ACCEPTE">
            </div>
        </div>
    </div>
    </form>
</main>
