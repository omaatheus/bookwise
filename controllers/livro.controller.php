<?php

$livro = (new DB)->query(
    "select

            l.id,
            l.title,
            l.author,
            l.description,
            l.release_year,
            round(sum(a.note) / 5.0) as note_rating,
            count(a.id) as count_rating

        from

            books l

        left join reviews a on a.book_id = l.id

        where

            l.id = :id

        group by

            l.id,
            l.title,
            l.author,
            l.description,
            l.release_year;", 
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