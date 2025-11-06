<?php

$livro = Livro::get($_GET['id']);

$avaliacoes = (new DB)->query(
    query: "select * from reviews where book_id = :id",
    class: Avaliacao::class,
    params: [
        'id' => $_GET['id']
    ]
)->fetchAll();

view('livro', compact('livro', 'avaliacoes'));
?>