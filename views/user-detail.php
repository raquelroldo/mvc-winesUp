<?php
if(isset($user)) { ?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="title"><?=$user["name"]?></h5>

        <p>E-mail: <?=$user["email"]?></p>
        <p>Data de nascimento: <?=date("d-m-Y", strtotime($user["birth_date"]) )?></p>
    </div>
</div>
<?php }?>
<a href="<?=BASE_PATH?>backoffice/users" class="link">Voltar à lista</a>