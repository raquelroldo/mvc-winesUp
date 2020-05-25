<?php 
  require("./assets/templates/header.php");
?>
    <div class="home-bg"></div>
    <div class="home-wrapper container">
      <h1 class="title">Your Wine Experience</h1>
      <h2 class="subtitle">Add your favorite wines and information about!</h2>
      <div class="d-flex justify-content-center">
      <?php 
      if(!isset($_SESSION["user_id"])) { ?>
      <div class="mr-3">
          <a href="<?=BASE_PATH?>access/login">Login</a>
        </div>
        <div>
          <a href="<?=BASE_PATH?>access/register">Registar</a>
        </div>
        
      <?php }
      else { ?>
        <div class="mr-3">
          Welcome
        </div>
      <?php }?>
      </div>
    </div>
<?php 
  require("./assets/templates/footer.php");
?>