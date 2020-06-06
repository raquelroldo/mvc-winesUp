<div class="d-flex justify-content-center my-4">
    <div class="card p-1" style="width: 40rem;">
        <div class="row">
            <div class="col-md-4 image-wrapper">
            <?php if ($wine[0]["image_path"] !== null  && !empty($wine[0]["image_path"])) { ?>
                <img src="<?=BASE_PATH.$wine[0]["image_path"]?>" class="wine-image" alt="...">
            <?php } else {?>
                <img src="<?=BASE_PATH?>assets/images/threeGlasses.jpg" class="wine-image" alt="...">
            <?php }?>
            </div>
            <div class="col-md-8 card-body">
                <p>Este é o vinho <?=$wine[0]["type"]?></p>
                <h5 class="title"><?=$wine[0]["name"]?></h5>
                <p>Produzido na região de <?=$wine[0]["region"]?> com muito apreço.</p>
                <p>É com muito orgulho e trabalho que <?=$wine[0]["producer"]?> apresenta este vinho.</p>
                <p>Produzido com as uvas <?=$wine[0]["grapes"]?> da colheita de <?=$wine[0]["year"]?>.</p>
                <p>Seu sabor que lembra <?=$wine[0]["flavours"]?> e apresenta um teor alcólico de <?=$wine[0]["alcohol"]?>%.</p>
                <p>Um excelente acompanhante de <?=$wine[0]["consumption"]?></p>
                <a href="<?=BASE_PATH?>backoffice/wines" class="card-link link">Voltar</a>
            </div>
        </div>
    </div>
</div>
