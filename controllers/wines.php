<?php 
require("models/wines.php");
    
    $winesModel = new Wines();

    $wines = $winesModel->getList();

require("views/wines.php");