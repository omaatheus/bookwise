<?php

$search = $_REQUEST["pesquisar"] ?? "";

$livros = (new DB)->livros($search);

view('index', compact('livros'));

?>