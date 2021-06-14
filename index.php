<?php
include_once "controllers/WebControllers.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new WebControllers();
switch ($route){
    case "Download-Thumbnails":$controller ->downloadThumbnails();break;

    default:$controller ->home();

}
