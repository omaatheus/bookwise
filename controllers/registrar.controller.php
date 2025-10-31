<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $validacoes = [];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email_confirmacao = $_POST['email_confirmacao'];

    if(strlen($nome) == 0){
        $validacoes []= 'O nome é obrigatório.';
    }
    if(strlen($email) == 0){
        $validacoes []= 'O email é obrigatório.';
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validacoes []= 'O Email é invalido';
    }
    if($email != $email_confirmacao){
        $validacoes [] = 'O Email de confirmação é diferente';
    }
    if(strlen($password) == 0){
        $validacoes []= 'A senha é obrigatória.';
    }
    if(strlen($password) < 6 || strlen($password) > 30){
        $validacoes []= 'A senha precisa ter entre 8 e 30 caracteres.';
    }

    if(sizeof($validacoes) > 0){
        $_SESSION['validacoes'] = $validacoes;
        header('location: /login');
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

}

?>