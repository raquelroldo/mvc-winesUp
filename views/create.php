
<div class="container rounded main-bg">
    <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>">
        <?php if(isset($wine)): ?>
            <h1 class="my-5 title">Atualizar Vinho</h1>
        <?php 
        elseif($delete_option): ?> <h2 class="form-title pt-3">Excluir vinho</h2>
        <?php
        else: ?> <h2 class="form-title pt-3">Adicione um novo vinho</h2>
        <?php
        endif;?>
        <div class="row justify-content-around">
          <div class="col-12">
            <input name="wine_id" class="form-control" type="hidden"
                <?php if(isset($wine)): ?> value="<?=$wine[0]["wine_id"]?>" <?php endif; ?> />
            <div class="form-group">
                <label for="name">Nome do vinho</label>
                <input id="name" name="name" class="form-control" type="text"
                placeholder="Qual é o nome do vinho?" autofocus="true" 
                <?php if(isset($wine)): ?> value="<?=$wine[0]["name"]?>" <?php endif; ?> />
            </div>
            <div class="form-group">
                <label for="type">Tipo do Vinho</label>
                <input id="type" name="type" class="form-control" type="text"
                placeholder="Tinto, Branco, Verde..." 
                <?php if(isset($wine)): ?> value="<?=$wine[0]["type"]?>" <?php endif; ?> />
            </div>
            <div class="form-group">
                <label for="region">A Região</label>
                <input id="region" name="region" class="form-control" type="text"
                placeholder="Alentejo, Setúbal, Douro..." 
                <?php if(isset($wine)): ?> value="<?=$wine[0]["region"]?>" <?php endif; ?> />
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="year">Ano</label>
                    <input id="year" name="year" class="form-control" type="number"
                    placeholder="2019, 2018, 2017..." 
                    <?php if(isset($wine)): ?> value="<?=$wine[0]["year"]?>" <?php endif; ?> />
                </div>
                <div class="form-group">
                    <label for="producer">Casa / Adega de Produção</label>
                    <input id="producer" name="producer" class="form-control" type="text"
                    placeholder="Quem produz este vinho" 
                    <?php if(isset($wine)): ?> value="<?=$wine[0]["producer"]?>" <?php endif; ?> />
                </div>
                <div class="form-group">
                    <label for="alcohol">Taxa de Álcool</label>
                    <input id="alcohol" name="alcohol" class="form-control" type="number"
                    placeholder="Qual a % de álcool deste vinho" 
                    <?php if(isset($wine)): ?> value="<?=$wine[0]["alcohol"]?>" <?php endif; ?> />
                </div>
                <div class="form-group">
                    <label for="grapes">Castas / Uvas</label>
                    <input id="grapes" name="grapes" class="form-control" type="text"
                    placeholder="Castelão, Trincadeira, Syrah..." 
                    <?php if(isset($wine)): ?> value="<?=$wine[0]["grapes"]?>" <?php endif; ?> />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="flavours">Sabores</label>
                    <input id="flavours" name="flavours" class="form-control" type="text"
                    placeholder="Frutos Vermelhos, Floral..." 
                    <?php if(isset($wine)): ?> value="<?=$wine[0]["flavours"]?>" <?php endif; ?> />
                </div>
                <div class="form-group">
                    <label for="image_path">Imagem</label>
                    <input id="image_path" name="image_path" class="form-control" type="url"
                    placeholder="Add an image url to remember the wine" 
                    <?php if(isset($wine)): ?> value="<?=$wine[0]["image_path"]?>" <?php endif; ?> />
                </div>
                <div class="form-group">
                    <label for="consumption">Dicas de Consumo</label>
                    <input id="consumption" name="consumption" class="form-control" type="text"
                    placeholder="Este vinho vai bem com...." 
                    <?php if(isset($wine)): ?> value="<?=$wine[0]["consumption"]?>" <?php endif; ?> />
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
                <div class="col-auto">
                    <div class="form-group">
                        <button type="submit" name="send" class="btn btn-primary btn-sm"><?php if($delete_option): echo 'Excluir'; else: echo 'Gravar'; endif; ?></button>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <a href="<?=BASE_PATH?>backoffice/wines" class="link">Cancelar</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </form>
</div>

