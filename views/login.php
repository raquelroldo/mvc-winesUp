<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>WinesUp</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/style/main.css">
    </head>
    <body>
<?php 
  include("./assets/templates/header.php");

    if(isset($message)) {
        echo '<p role="alert">'. $message .'</p>';
    }
?>
    <div class="container d-flex justify-content-center">
        <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>">
          <h1 class="my-5 title">Log yourself in!</h1>
          <div class="form-group">
              <label>
                  E-mail
                  <input type="text" name="email" class="form-control" maxlength="64" autofocus required>
              </label>
          </div>
          <div class="form-group">
              <label>
                  Password
                  <input type="password" name="password" class="form-control" maxlength="1000" minlength="6" required>
              </label>
          </div>
          <div class="form-group">
              <button type="submit" name="send">Entrar</button>
          </div>
      </form>
    </div>
<?php include("./assets/templates/footer.php");?>