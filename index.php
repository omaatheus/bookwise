<?php

$controller = 'index'; #torno o controller inicial o index por padrão

if (isset($_SERVER['PATH_INFO'])) { #verifica se o parametro da url existe

    $controller = str_replace('/', '', $_SERVER['PATH_INFO']); #remove a barra e deixa só a str

}

require "controllers/{$controller}.controller.php"; #requisito meu controller com base no param da url

?>