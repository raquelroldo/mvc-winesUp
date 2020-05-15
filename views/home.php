<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/main.css">
    <link rel="stylesheet" href="../assets/style/home.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <div class="wrapper">
          <nav class="navbar navbar-expand-lg navbar-dark">
            <a href="<?=BASE_PATH?>" class="main-title navbar-brand">WinesUp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="<?=BASE_PATH?>/views">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=BASE_PATH?>/views/wines">Wines</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=BASE_PATH?>/views/create.php">Create</a>
                </li>
              </ul>
            </div>
          </nav>
      </div>
    </header>
    <div class="home-bg"></div>
    <div class="home-wrapper container">
      <h1 class="title">Your Wine Experience</h1>
      <h2 class="subtitle">Add your favorite wines and information about!</h2>
      <div class="d-flex justify-content-center">
        <div class="mr-3">
          <a href="<?=BASE_PATH?>/views/login">Login</a>
        </div>
        <div>
          <a href="<?=BASE_PATH?>/views/register.php">Register Here</a>
        </div>
      </div>
    </div>
    <div class="footer-wrapper">
      <footer>
        <div class="footer-content">
          Copyright &copy; 2020 - Made with &#10084; by raquelRoldo
        </div>
      </footer>
    </div>

  </body>
</html>
