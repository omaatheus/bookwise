<?php 

require 'data.php';

$view = 'index';

if($uri = str_replace('/', '', $_SERVER['REQUEST_URI'])) {
    $view = $uri;
};

require 'views/template/app.php';

?>