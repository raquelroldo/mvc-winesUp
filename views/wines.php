
<div class="container d-flex justify-content-center">
    <div class="list-wrapper">
        <h1 class="title my-4">A Nossa Adega</h1>
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
                  
                        <a href="<?=BASE_PATH?>wines/wine-detail" class="link">Detalhes</a>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>    
</div>

    