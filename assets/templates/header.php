<header>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a href="/" class="main-title navbar-brand">WinesUp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    
                  <?php
                  if (isset($_SESSION["user_id"])) {
                  ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/wines">Vinhos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-1" href="<?=BASE_PATH?>access/register"><span class="mr-3">|</span>Bem vindo(a), <?=$_SESSION["user_name"]?></a>
                    </li>
                <?php if($_SESSION["is_admin"] == 1) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_PATH?>backoffice/admin">(Admin)</a>
                    </li>
                <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_PATH?>access/logout">Sair</a>
                    </li>
                    <?php
                    } ?>
                </ul>
            </div>
        </nav>
    </div>
</header>