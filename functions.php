<?php 

function view($view){

    require "views/template/app.php";

}

function dumpAndDie($dump){
    var_dump($dump);

    die();
};

function abort($code){
    http_response_code($code);

    view($code);

    die();
}

?>