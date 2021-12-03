
<main class="container">
<?php if(isset($message)) {?>

<div class="alert alert-warning" role="alert">
    <?= nl2br($message)?>
</div>

<?php } else { ?>

<form action="" method="GET" class="row justify-content-center container">
    <div class="form-group col-lg-3 col-12">
        <input type="text" name="s" id="s" value="<?=$s?>" class="form-control" placeholder="Qui recherchez-vous?">
    </div>
    <div class="form-group col-lg-2 col-12">
        <input type="submit" value="Rechercher" class="btn login_btn">
    </div>

</form>

<p class="mt-3 fst-italic">
        Il y a <span class="fw-bold"><?=$nbCustomers?> Clients</span> chez AdelOngle
</p>

        <table class="table">

            <tbody>

                <?php 
            $i=0;
            foreach($response as $customers) {
                $i++;
                ?>
                <tr class="d-flex text-center flex-column flex-lg-row justify-content-center align-items-center my-3 shadow">
                    <th><?=$customers->customer_id?></th>
                    <td><?=htmlentities($customers->firstname)?></td>
                    <td><?=htmlentities($customers->lastname)?></td>
                    <td><?=htmlentities($customers->mail)?></td>
                    <td><?=htmlentities($customers->adress)?></td>
                    <td><a href="mailto:<?=htmlentities($customers->mail)?>"><?=htmlentities($customers->mail)?></a></td>
                    <td><a href="tel:<?=htmlentities($customers->phone_number)?>"><?=htmlentities($customers->phone_number)?></a></td>
                    <td>
                        <a href="/controllers/admin/modifAdminCtrl.php?id=<?=htmlentities($customers->customer_id)?>"><img src="https://img.icons8.com/stickers/42/000000/multi-edit.png" alt="icon de bloc note pour modifié" /></a>
                        </td>
                    <td>
                    <img alt="icon de croix pour supprimé" data-id="<?=htmlentities($customers->customer_id)?>" role="button" data-bs-toggle="modal" data-bs-target="#modalDelete" src="https://img.icons8.com/stickers/42/000000/delete-forever.png"/>
                    </td>
                </tr>
                <?php } ?>

            </tbody>

        </table>

                <!-- Modal -->
                <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteName" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="title">Supprimer</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                Êtes vous sûrs de vouloir supprimer?
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn w-25 btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="button" id="confirm" class="btn w-25 login_btn">Oui sûrs</button>
                            </div>
                            
                        </div>
                    </div>
                </div>

<nav aria-label="...">
    <ul class="pagination pagination-lg">
        

        <?php
        for($i=1;$i<=$nbPages;$i++){
            if($i==$currentPage){ ?>    
            <li class="page-item active" aria-current="page">
                <span class="page-link login_btn">
                <?=$i?> 
                <span class="visually-hidden">(current)</span>
                </span>
            </li>
        <?php } else { ?>
        <li class="page-item"><a class="page-link" href="?currentPage=<?=$i?>&s=<?=$s?>"><?=$i?></a></li>
        <?php } 
        }?>
    </ul>
</nav>
<?php } ?>
</main>