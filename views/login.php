<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/main.css">

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
                  <a class="nav-link" href="register.html">Register</a>
                </li>
              </ul>
            </div>
          </nav>
      </div>
    </header>
    <div class="container d-flex justify-content-center">
        <form method="post" action="#">
          <h1 class="my-5 title">Log yourself in!</h1>
          <div class="form-group">
              <label>
                  Username
                  <input type="text" name="username" class="form-control" maxlength="64" required>
              </label>
          </div>
          <div class="form-group">
              <label>
                  Password
                  <input type="password" name="password" class="form-control" maxlength="1000" minlength="6" required>
              </label>
          </div>
          <div class="form-group">
              <button type="submit" name="send">Submit</button>
          </div>
      </form>
    </div>
  </body>
</html>