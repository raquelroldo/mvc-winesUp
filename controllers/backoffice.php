<?php 

require("models/wines.php");

if($_SESSION["is_admin"]) {
    $edit_option = count($url_parts) > 3 && $url_parts[3] === "edit";
    $create_option = count($url_parts) === 4 && $url_parts[3] === "create";
    $delete_option = count($url_parts) > 3 && $url_parts[3] === "delete";
    $wines_link = $url_parts[2] === "wines";
    $wine_unity = count($url_parts) > 3 && $url_parts[3];

    $winesModel = new Wines();
    
    if($wines_link) {
        
        $wines = $winesModel->getList();
        
        if($wines_link && $wine_unity) {
        
            if($create_option) {
                $wine;

            } else if(($url_parts[3] === "edit") && count($url_parts) === 5) {
                $wine_id = $url_parts[4];
                $wine = $winesModel->getItem($wine_id);

            }else if(($url_parts[3] === "delete") && count($url_parts) === 5) {
                $wine_id = $url_parts[4];
                $wine = $winesModel->getItem($wine_id);
            }


            if(isset($_POST["send"])) {
                
                if($wine_unity === ($url_parts[3] === "create")) {
                    $response = $winesModel->create($_POST);
                    
                } 
                else if($wine_unity === ($url_parts[3] === "edit")) {
                    $response = $winesModel->update($_POST);

                }
                else if($wine_unity === ($url_parts[3] === "delete")) {
                    $response = $winesModel->delete($_POST);
                    
                }
                
                if($response) {
                    header("Location: " . BASE_PATH . "backoffice/wines");
                    exit;
                }
            }
        }
    }
}
else {
    header("Location: " . BASE_PATH);
}

require("assets/templates/header.php");
require("views/backoffice.php");
require("assets/templates/footer.php");