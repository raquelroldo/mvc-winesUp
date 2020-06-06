<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>WinesUp</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/style/main.css">
        <link rel="stylesheet" href="../assets/style/home.css">
    </head>
    <body>
    <?php include("./assets/templates/header.php");?>
        
        <div class="home-bg"></div>
        <div class="home-wrapper container">
            <h1 class="title">Bem Vindo a Nossa Adega</h1>
            <div class="d-flex justify-content-center">
            <?php if(!isset($_SESSION["user_id"])) { ?>
                <div class="mr-3">
                    <a href="<?=BASE_PATH?>access/login">Login</a>
                </div>
                <div>
                    <a href="<?=BASE_PATH?>access/register">Registar</a>
                </div>
            <?php }
            else { ?>
                <div class="mr-3">
                    <h3 class="title">Aproveite a visita!</h3>
                </div>
            <?php }?>
            </div>
        </div>
<?php include("./assets/templates/footer.php");?>