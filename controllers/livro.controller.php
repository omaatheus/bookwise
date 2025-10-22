<?php

$db = new DB();

$livros = $db->livros();

$id = $_REQUEST['id']; #requisito o id que vem da minha super global

$filtrado = array_filter($livros, fn($l) =>  $l->id == $id); #faço um filtro em livros para achar o id que quero

$livro = array_pop($filtrado); # subtraio tudo dessa array do id

view('livro', compact('livro'));
?>