<?php

if (! auth()) {

    header('Location: /');

    exit();

}

$livros = (new DB)->query("select * from books where user_id = :id", Livro::class, ['id' => auth()->id]);

view('meus-livros', compact('livros'));