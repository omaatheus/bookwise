<?php

$id = $_REQUEST['id'];  #requisito o id que vem da minha super global

$db = new DB();

$livro = $db->livro($id);

view('livro', compact('livro'));
?>