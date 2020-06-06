<?php

if(isset($_SESSION["is_admin"]) == 1) {

    $wines_path = $url_parts[2] === "wines";
    $users_path = $url_parts[2] === "users";
    $base_path_admin = count($url_parts) === 3; 

    if($wines_path) {  
        require_once("models/wines.php");
        $winesModel = new Wines(); 
        if ($base_path_admin) {     
            $wines = $winesModel->getList(); 
        } else {
            $edit_option = $url_parts[3] === "edit";
            $create_option = $url_parts[3] === "create";
            $delete_option = $url_parts[3] === "delete";
            $detail_option = $url_parts[3] === "detail";

            if($edit_option || $delete_option || $detail_option) {
                $wine_id = $url_parts[4];
                $wine = $winesModel->getItem($wine_id);
            }

            if ($create_option || $edit_option || $delete_option && isset($_POST["send"])) {
                if($create_option) {
                    $response = $winesModel->create($_POST, $_FILES);
                } 
                else if($edit_option) {
                    $response = $winesModel->update($_POST, $_FILES);
                }
                else if($delete_option) {
                    $response = $winesModel->delete($_POST);
                }
                
                if($response) {
                    header("Location: " . BASE_PATH . "backoffice/wines");
                    exit;
                }
            }
        }
    } else if($users_path) {
        require_once("models/users.php");
        $usersModel = new Users();
        if ($base_path_admin) {  
            $users = $usersModel->getList();
        } else {
            $edit_option = $url_parts[3] === "edit";
            $create_option = $url_parts[3] === "create";
            $delete_option = $url_parts[3] === "delete";
            $detail_option = $url_parts[3] === "detail";
        }
        if (!$base_path_admin && ($edit_option || $delete_option || $detail_option)) {
            $user_id = $url_parts[4];
            $user = $usersModel->getDetail($user_id); 
        } 


        if(isset($_POST["send"])) {
            if($create_option) {
                $response = $usersModel->create($_POST);
            } 
            else if($edit_option) {
                $response = $usersModel->updateByAdmin($_POST);
            }
            else if($delete_option) {
                $response = $usersModel->delete($_POST);
            }
            
            if($response) {
                header("Location: " . BASE_PATH . "backoffice/users");
                exit;
            }
        }
    }
    require("views/backoffice.php");
} else {
    require_once("views/error.php");
}

