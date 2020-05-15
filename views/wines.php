<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Wines</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/main.css">
    <link rel="stylesheet" href="../assets/style/wines.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <div class="wrapper">
          <nav class="navbar navbar-expand-lg navbar-dark">
            <a href="home.html" class="main-title navbar-brand">WinesUp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="home.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="wines.html">Wines</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="create.html">Add Wines</a>
                </li>
              </ul>
            </div>
          </nav>
      </div>
    </header>
    <div class="container d-flex justify-content-center">
      <div class="list-wrapper">
        <h1 class="title my-4">Wines</h1>
        <div class="item-wrapper">
            <a href="#" class="link item-content">
            <div class="image-wrapper mr-3">
                <img src="../assets/images/wine-bottle.jpg" class="wine-image" alt="">
            </div>
            <div class="item-text-wrapper">
                <h4 class="item-title">Red Wine Dona Ana</h4>
                <p class="item-text">Douro</p>
            </div>
            </a>
            <div class="item-btn-wrapper">
            <button name="edit" type="button" class="btn btn-primary">Edit</button>
            <button type="button" name="delete" class="btn btn-primary">Delete</button>
            </div>
        </div>
        <div class="item-wrapper">
          <a href="wine-detail.html" class="link item-content">
             <div class="image-wrapper">
              <img src="#" class="wine-image" alt="">
            </div>
            <div class="item-text-wrapper">
              <h4 class="item-title">Red Wine Maria Ana</h4>
              <p class="item-text">from Alentejo.</p>
            </div>
          </a>
          <div class="item-btn-wrapper">
            <button name="edit" type="button" class="btn btn-primary">Edit</button>
            <button type="button" name="delete" class="btn btn-primary">Delete</button>
          </div>
        </div>
        <div class="item-wrapper">
          <a href="wine-detail.html" class="link item-content">
            <div class="image-wrapper">
              <img src="#" class="wine-image" alt="">
            </div>
            <div class="item-text-wrapper">
              <h4 class="item-title">Red Wine Maria Ana</h4>
              <p class="item-text">from Alentejo.</p>
            </div>
          </a>
          <div class="item-btn-wrapper">
            <button name="edit" type="button" class="btn btn-primary">Edit</button>
            <button type="button" name="delete" class="btn btn-primary">Delete</button>
          </div>
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
