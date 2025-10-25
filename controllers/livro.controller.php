<?php

$livro = (new DB)->query(
    "SELECT * FROM books WHERE id = :id", 
    Livro::class, 
    ['id' => $_GET['id']])
    ->fetch();

view('livro', compact('livro'));
?>