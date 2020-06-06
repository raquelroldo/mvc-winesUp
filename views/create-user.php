<div class="d-flex justify-content-center">
    <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>">
        <h1 class="mb-5 title"><?php if(isset($user) && $delete_option): echo 'Excluir Utilizador'; elseif(isset($user) && !$delete_option): echo 'Atualizar Utilizador'; else: echo 'Criar novo Utilizador'; endif; ?></h1>
        <input name="user_id" class="form-control" type="hidden" <?php if(isset($user)): ?> value="<?=$user["user_id"]?>" <?php endif; ?> />
        <div class="form-group">
            <label>
                Nome
                <input type="text" name="name" class="form-control" <?php if(isset($user)): ?> value="<?=$user["name"]?>" <?php endif; ?> maxlength="64" required autofocus>
            </label>
        </div>
        <div class="form-group">
            <label>
                Data de Nascimento
                <input type="date" name="birth_date" class="form-control" <?php if(isset($user)): ?> value="<?php echo date("Y-m-d", strtotime($user["birth_date"]))?>" <?php endif; ?> maxlength="64" required>
            </label>
        </div>
        <div class="form-group">
            <label>
                Email
                <input type="email" name="email" class="form-control" <?php if(isset($user)): ?> value="<?=$user["email"]?>" <?php endif; ?> required>
            </label>
        </div>
        <div class="form-group">
            <label>
                Password
                <input type="password" name="password" class="form-control" maxlength="1000" minlength="6">
            </label>
        </div>
        <div class="form-group">
            <label>
                Password Repeat
                <input type="password" name="rep_password" class="form-control" maxlength="1000" minlength="6">
            </label>
        </div>
        <div class="form-check">
            <label>
                <input type="checkbox" name="admin" class="form-check-input">
                Permissão de Administrador
                <small class="d-block">Marque para permissão de admin.</small>
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="link" name="send"><?php if(isset($user) && $delete_option): echo "Deletar"; else: echo "Gravar"; endif; ?></button>
            <a href="<?=BASE_PATH?>backoffice/users" class="ml-3 link">Cancelar</a>
        </div>
    </form>
</div>