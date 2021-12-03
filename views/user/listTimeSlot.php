<main>
    <div class="container shadow py-2">
        <div class="row justify-content-center align-items-center mb-5 pt-3 fs-4">
            <div class="col-12 col-lg-4 d-lg-block text-center border-dark"> <h1 class="firstColor rounded py-2 px-2 text-white">Gestion créneaux</h1>  </div>
        </div>
        <table class="table">
            <tbody class="row align-items-center">     
                <?php foreach ($reads as $read) { ?>

                    <?php $dateFormat = strftime('%e %B %G à %Hh%M', strtotime($read->datetime)); ?>
                    
                        <tr class="col-lg-6 col-12">
                            <td class="col-12 col-lg-6 text-center"><?=$dateFormat?></td>
                            <td class="my-3 col-lg-4 col-8 text-center">
                                <a href="/controllers/admin/delete-timeSlot.php?id=<?=$read->time_id?>"><img src="https://img.icons8.com/stickers/42/000000/delete-forever.png" alt="icon de croix pour supprimé"/>
                            </td>
                        </tr>
                    
                <?php  } ?>
            </tbody>
        </table>    
    </div>
</main>