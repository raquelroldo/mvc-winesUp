<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>WinesUp Lista</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="<?=BASE_PATH?>assets/style/main.css">
        <link rel="stylesheet" href="<?=BASE_PATH?>assets/style/wines.css">
        <script src="<?=BASE_PATH?>assets/js/main.js"></script>
    </head>
    <body>

    <?php require("./assets/templates/header.php"); ?>
        <div class="container d-flex justify-content-center">
            <div class="list-wrapper">
                <h1 class="title my-4">A Nossa Adega</h1>
                <?php 
                foreach($wines as $wine) {?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4 image-wrapper">
                        <?php if ($wine["image_path"] !== null  && !empty($wine["image_path"])) { ?>
                            <img src="<?=BASE_PATH?><?=$wine["image_path"]?>" class="card-img wine-image" alt="...">
                        <?php } else {?>
                            <img src="<?=BASE_PATH?>assets/images/threeGlasses.jpg" class="card-img wine-image" alt="...">
                        <?php }?>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Vinho  <?=$wine["type"]." ".$wine["name"]?></h5>
                            </div>
                            <div class="card-footer mt-5 d-flex justify-content-around">
                                <a href="<?=BASE_PATH?>wines/wine-detail/<?=$wine["wine_id"]?>" class="link">Detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>    
        </div>
    <?php require("./assets/templates/footer.php");?>

    