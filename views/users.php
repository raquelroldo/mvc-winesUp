
<a href="<?=BASE_PATH?>backoffice/users/create" class="link">Criar Utilizador</a>
<div class="row">
    <?php
    if(isset($users)) {
        foreach($users as $user) {?>
        <div class="col-4 mb-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="title"><?=$user["name"]?></h5>
                    <div class="mt-5 d-flex justify-content-around">
                        <a href="<?=BASE_PATH?>backoffice/users/detail/<?=$user["user_id"]?>" class="link ">Detalhes</a>
                        <a href="<?=BASE_PATH?>backoffice/users/edit/<?=$user["user_id"]?>" class="link text-right">Editar</a>
                        <a href="<?=BASE_PATH?>backoffice/users/delete/<?=$user["user_id"]?>" class="link text-right">Deletar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    }?>
</div>