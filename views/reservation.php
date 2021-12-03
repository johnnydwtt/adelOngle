<main>
    <div class="container shadow py-2">
        <div class="row justify-content-center align-items-center mb-5 pt-3 fs-4">
            <div class="col-12 col-lg-4 d-lg-block text-center border-end border-dark"> <span class="firstColor rounded py-2 px-2 text-white">Je choisie mon rendez-vous</span> </div>
            <div class="col-4 col-lg-4 d-none d-lg-block text-center border-end border-dark">Je choisie ma Prestation</div>
            <div class="col-4 col-lg-4 d-none d-lg-block text-center">Je Valide</div>
        </div>
        <table class="table">
            <tbody class="row align-items-center">     
                <?php foreach ($reads as $read) { ?>

                    <?php $dateFormat = strftime('%e %B %G à %Hh%M', strtotime($read->datetime)); ?>
                    
                        <tr class="col-lg-6 col-12">
                            <td class="col-12 col-lg-6 text-center"><?=$dateFormat?></td>
                            <td class="my-3 col-lg-4 col-8 text-center">
                                <a href="/controllers/prestationCtrl.php?id=<?=$read->time_id?>"><button class="btn login_btn">Choisir</button></a> </td>
                        </tr>
                    
                <?php  } ?>
            </tbody>
        </table>    
    </div>
</main>