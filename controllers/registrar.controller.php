<?php

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([

        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed', 'unique:users'],
        'password' => ['required', 'min:8', 'max:30', 'strong']

    ], $_POST);

    if ($validacao->naoPassou('registrar')) {

        header("Location: /login");

        exit();

    }
(new DB)->query(
    query: 'INSERT INTO users (name, email, password) VALUES (:nome, :email, :password)',
    params: [
        "nome" => $_POST['nome'],
        "email" => $_POST['email'],
        "password" => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]
);

    flash()->push('mensagem', 'Registrado com sucesso!');

    header('location: /login');
    exit();

};

header('location: /login');
exit();