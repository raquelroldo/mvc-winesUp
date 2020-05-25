<?php 
require("models/wines.php");
    
$winesModel = new Wines();

$wines = $winesModel->getList();

require("./assets/templates/header.php");
require("views/wines.php");
require("./assets/templates/footer.php");
