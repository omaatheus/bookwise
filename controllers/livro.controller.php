<?php

$livro = (new DB)->query(
    "SELECT * FROM books WHERE id = :id", 
    Livro::class, 
    ['id' => $_GET['id']])
    ->fetch();

$avaliacoes = (new DB)->query(
    query: "select * from reviews where book_id = :id",
    class: Avaliacao::class,
    params: [
        'id' => $_GET['id']
    ]
)->fetchAll();

view('livro', compact('livro', 'avaliacoes'));
?>