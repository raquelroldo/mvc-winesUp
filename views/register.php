<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>WinesUp Registar</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/style/main.css">
        <link rel="stylesheet" href="/assets/style/register.css">
    </head>
    <body>
    <?php include("./assets/templates/header.php");?>
    <div class="container d-flex justify-content-center">
        <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>">
        <?php if(isset($user)): ?>
            <h1 class="my-5 title">Atualizar Perfil</h1>
        <?php 
        else: echo '<h1 class="my-5 title">Registar</h1>';
        endif; ?>
            <input type="hidden" name="user_id" class="form-control" <?php if(isset($user)): ?> value="<?=$user["user_id"]?>" <?php endif; ?>>
            <div class="form-group">
                <label>
                    Nome
                    <input type="text" name="name" class="form-control" <?php if(isset($user)): ?> value="<?=$user["name"]?>" <?php endif; ?> maxlength="64" autofocus required>
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
                    <input type="password" name="password" class="form-control" maxlength="1000" minlength="6" required>
                </label>
            </div>
            <div class="form-group">
                <label>
                    Password Repeat
                    <input type="password" name="rep_password" class="form-control" maxlength="1000" minlength="6" required>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" name="send"><?php if(isset($user)): echo "Gravar"; else: echo "Registar"; endif; ?></button>
                <a href="<?=BASE_PATH?>wines" class="ml-2 link">Cancelar</a>
            </div>
        </form>
    </div>
<?php include("./assets/templates/footer.php");?>