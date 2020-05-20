<?php

if(!isset($url_parts[2])) {
    header("HTTP/1.1 400 Bad Request");
    die("Bad request");
}

require("models/users.php");

$userModel = new Users();

if($url_parts[2] === "register") {
    if(isset($_POST["send"])) {
        $response = $userModel->register($_POST);

        if($response) {
            header("Location: ".BASE_PATH."/access/login");
            exit;
        }
    }
    require("views/register.php");
}
else if($url_parts[2] === "login") {

    if(isset($_POST["send"])) {
        $response = $userModel->login($_POST);
        
        if($response) {
            header("Location: " . BASE_PATH);
            exit;
        }

        $message = "Dados incorretos";
    }
    require("views/login.php");
}
else {
    session_destroy();
    header("Location: " . BASE_PATH);
}

