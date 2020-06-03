<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>WinesUp</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/style/main.css">
    </head>
    <body> 
        <?php include("./assets/templates/header.php");?>

        <div class="container">
            <div class="row pt-4">
                <div class="col-2">
                    <nav class="nav flex-column">
                        <a class="nav-link link <?php if(!$wines_link): echo 'active'; endif;?>" href="<?=BASE_PATH?>backoffice/users">Users</a>
                        <a class="nav-link link <?php if($wines_link): echo 'active'; endif;?>" href="<?=BASE_PATH?>backoffice/wines">Vinhos</a>
                    </nav>
                </div>
                <div class="col-10">
                <?php 
                if($wines_path) { 
                    if((isset($create_option) || isset($edit_option) || isset($delete_option)) && ($edit_option || $create_option || $delete_option)) {
                        include("create.php");
                    } elseif (isset($detail_option)) {
                        require("admin-wine-detail.php");
                    }else { ?>
                    
                    <div class="d-flex justify-content-center">
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
                                            <a href="wines/detail/<?=$wine["wine_id"]?>" class="link">Detalhes</a>
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
                elseif($users_path) {
                    if((isset($create_option) || isset($edit_option) || isset($delete_option)) && ($edit_option || $create_option || $delete_option)) {
                        include("create-user.php");
                    } elseif (isset($detail_option)) {
                        include("user-detail.php");
                    } else {
                        include("users.php");
                    }
                } else { ?>
                    <h2 class="title text-center mt-5">Bem Vindo à Área de Administração</h2>
                    <p class="text-center mt-4">Através do menu lateral pode fazer o gerenciamento de utilizadores e vinhos.</p>
                <?php } ?>
                </div> 
            </div>  
        </div>

<?php include("./assets/templates/footer.php");?>
        