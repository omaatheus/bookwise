<?php

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([

        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        'password' => ['required', 'min:8', 'max:30', 'strong']

    ], $_POST);

    if ($validacao->naoPassou()) {

        header("Location: /login");

        exit();

    }
(new DB)->query(
    query: 'INSERT INTO users (name, email, password) VALUES (:nome, :email, :password)',
    params: [
        "nome" => $_POST['nome'],
        "email" => $_POST['email'],
        "password" => $_POST['password']
    ]
);

    header('location: /login?mensagem=Registrado com sucesso!');

    exit();

};