<?php 

function loadController(){
    $controller = str_replace('/', '', parse_url($_SERVER['PATH_INFO'])['path']);

if(!$controller) $controller = 'index';

if (!file_exists("controllers/{$controller}.controller.php")){
    echo "Page not found";

    die();
}

 require "controllers/{$controller}.controller.php"; #requisito meu controller com base no param da url

} 

loadController()

?>