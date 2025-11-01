<?php 

$mensagem = $_REQUEST['mensagem'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $usuario = (new DB)->query(
        query: "select * from users where email = :email and password = :senha ", 
        class: Usuario::class,
        params: [
            "email" => $email,
            "senha" => $senha,
        ]
        )->fetch();

    if($usuario){
        $_SESSION['auth'] = $usuario;
        $_SESSION['mensagem'] = 'Seja bem vindo'. $usuario->name . '!';
        header('location: /');
        exit();
    }

}   

view('login', compact('mensagem'));

?>