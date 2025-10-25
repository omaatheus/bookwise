<?php

$search = $_REQUEST["pesquisar"] ?? "";

$livros = (new DB)->query(
    'SELECT * FROM books WHERE title LIKE :pesquisar',
    Livro::class,
    [':pesquisar' => "%$search%"]
)->fetchAll();

view('index', compact('livros'));

?>