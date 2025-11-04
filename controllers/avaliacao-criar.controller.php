<?php

if ($_SERVER['REQUEST_POST' != 'POST']){
    header('location: /');
    exit();
}

$user_id = auth()->id;
$book_id = $_POST['livro_id'];
$rating = $_POST['avaliacao'];
$note = $_POST['nota'];

$validacao = Validacao::validar([
    'avaliacao' => ['required'],
    'nota' => ['required']
], $_POST);

if($validacao->naoPassou()){
    header('location: /livro?id='. $book_id);
    exit();
}

(new DB)->query(
    query: "insert into reviews ( user_id, book_id, rating, note )
    values (:user_id, :book_id, :rating, :note)",
    params: compact('user_id', 'book_id', 'rating', 'note'));

flash()->push('mensagem', 'Avaliação criada com sucesso!');
header('location: /livro?id='. $book_id);
exit();