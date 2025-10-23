<?php

$id = $_REQUEST['id'];  #requisito o id que vem da minha super global

$db = new DB();

$livro = $db->livros($id)[0];

view('livro', compact('livro'));
?>