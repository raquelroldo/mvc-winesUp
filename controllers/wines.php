<?php 
require("models/wines.php");
    
$winesModel = new Wines();

$wines_path = $url_parts[1] === "wines";
$base_path = count($url_parts) === 2; 

if($wines_path) {  
    $wines = $winesModel->getList(); 
    if ($base_path) {     
        require("views/wines.php");
    } else {
        $detail_option = $url_parts[2] === "detail";
        $wine_id = $url_parts[3];
        $wine = $winesModel->getItem($wine_id);
        require("views/wine-detail.php");
    }
}
