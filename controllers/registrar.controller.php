<?php

require 'Validacao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([

        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        'senha' => ['required', 'min:8', 'max:30', 'strong']

    ], $_POST);

    if ($validacao->naoPassou()) {

        header("Location: /login");

        exit();

    }

    $validacoes = [];

    $nome = $_POST['nome'];

    $email = $_POST['email'];

    $email_confirmacao = $_POST['email_confirmacao'];

    $senha = $_POST['password'];

    if (strlen($nome) == 0) {

        $validacoes[] = 'O nome é obrigatório.';

    }

    if (strlen($email) == 0) {

        $validacoes[] = 'O email é obrigatório.';

    }

    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $validacoes[] = 'O email é inválido.';

    }

    if ($email != $email_confirmacao) {

        $validacoes[] = 'O email de confirmação está diferente.';

    }

    if (strlen($senha) == 0) {

        $validacoes[] = 'A senha é obrigatória.';

    }

    if (strlen($senha) < 8 || strlen($senha) > 30) {

        $validacoes[] = 'A senha precisa ter entre 8 e 30 caracteres.';

    }

    if (!str_contains($senha, '*')) {

        $validacoes[] = 'A senha precisa um * nela.';

    }

    if (sizeof($validacoes) > 0) {

        $_SESSION['validacoes'] = $validacoes;

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