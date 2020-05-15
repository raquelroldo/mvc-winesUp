<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/main.css">
    <link rel="stylesheet" href="../assets/style/create.css">

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
    <div class="container rounded main-bg">
        <form method="post" action="#">
            <h2 class="form-title pt-3">Add here a Wine</h2>
            <div class="row justify-content-around">
              <div class="col-12">
                <div class="form-group">
                    <label for="wine-name">The Name: </label>
                    <input id="wine-name" name="wine-name" class="form-control" type="text"
                    placeholder="Enter the name of the wine" autofocus="true" />
                </div>
                <div class="form-group">
                    <label for="wine-type">The Type: </label>
                    <input id="wine-type" name="wine-type" class="form-control" type="text"
                    placeholder="Enter the type of the wine" />
                </div>
                <div class="form-group">
                    <label for="wine-region">The Region: </label>
                    <input id="wine-region" name="wine-region" class="form-control" type="text"
                    placeholder="Region where the wine is produced" />
                </div>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="wine-rate">The Rate: </label>
                        <input id="wine-rate" name="wine-rate" class="form-control" type="number"
                        placeholder="How much do you like it (0 to 10)?" />
                    </div>
                    <div class="form-group">
                        <label for="wine-year">The Year: </label>
                        <input id="wine-year" name="wine-year" class="form-control" type="number"
                        placeholder="Year when the wine was produced" />
                    </div>
                    <div class="form-group">
                        <label for="wine-producer">The Producer: </label>
                        <input id="wine-producer" name="wine-producer" class="form-control" type="text"
                        placeholder="Who produced the wine" />
                    </div>
                    <div class="form-group">
                        <label for="wine-alcohol">The Alcohol: </label>
                        <input id="wine-alcohol" name="wine-alcohol" class="form-control" type="number"
                        placeholder="How much alcohol it has?" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="wine-grapes">The Grapes: </label>
                        <input id="wine-grapes" name="wine-grapes" class="form-control" type="text"
                        placeholder="What grapes it has?" />
                    </div>
                    <div class="form-group">
                      <label for="wine-flavours">The Flavours: </label>
                      <input id="wine-flavours" name="wine-flavours" class="form-control" type="text"
                      placeholder="Does it taste like chocolate or fruits?" />
                    </div>
                    <div class="form-group">
                      <label for="wine-image">The Image: </label>
                      <input id="wine-image" name="wine-image" class="form-control" type="url"
                      placeholder="Add an image url to remember the wine" />
                    </div>
                    <div class="form-group">
                      <label for="wine-notes">The Notes: </label>
                      <input id="wine-notes" name="wine-notes" class="form-control" type="text"
                      placeholder="Add a note to remember the moment" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-sm"> Save Wine</button>
                </div>
              </div>
            </div>
        </form>
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
