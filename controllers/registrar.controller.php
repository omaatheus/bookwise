<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
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