<?php 
  require("./assets/templates/header.php");

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
                  <input type="text" name="email" class="form-control" maxlength="64" required>
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
<?php 
  require("./assets/templates/footer.php");
?>