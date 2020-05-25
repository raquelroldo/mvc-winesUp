<div class="container">
    <div class="row">
        <div class="col-2">
            <nav class="nav flex-column">
                <a class="nav-link <?php if(!$wines_link): echo 'active'; endif;?>" href="<?=BASE_PATH?>backoffice/users">Users</a>
                <a class="nav-link <?php if($wines_link): echo 'active'; endif;?>" href="<?=BASE_PATH?>backoffice/wines">Vinhos</a>
            </nav>
        </div>
        <div class="col-10">
        <?php 
        if($wines_link) { 
            if($create_option || $edit_option || $delete_option) {
                require("create.php");
            } else { ?>
            
            <div class="container d-flex justify-content-center">
                <div class="list-wrapper">
                    <h1 class="title my-4">A Nossa Adega</h1>
                    <a href="wines/create" class="link">Adicionar</a>
                    <?php 
                    foreach($wines as $wine) { ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 image-wrapper">
                                <img src="../assets/images/wine-bottle.jpg" class="card-img wine-image" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Vinho  <?=$wine["type"].' '.$wine["name"]?></h5>
                                </div>
                                <div class="card-footer mt-5 d-flex justify-content-around">
                                    <a href="wines/edit/<?=$wine["wine_id"]?>" class="link">Editar</a>
                                    <a href="<?=BASE_PATH?>wines/wine-detail" class="link">Detalhes</a>
                                    <a href="wines/delete/<?=$wine["wine_id"]?>" class="link">Deletar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div> 
            </div>
        <?php }
        }
        else {
            require("users.php");
        } ?>
    </div>    
</div>
       