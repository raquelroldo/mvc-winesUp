<?php
session_start();

//$url_parts[1] === index.php


$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

define("BASE_PATH", dirname($_SERVER["SCRIPT_NAME"]));

setlocale(LC_ALL, "pt_PT.UTF-8");

$controller = "home";

$controllers = ["home", "wines", "access"];

if(isset($url_parts[1]) && in_array($url_parts[1], $controllers)) {
    $controller = $url_parts[1];
}

require("controllers/".$controller.".php");
?>