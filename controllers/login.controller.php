<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['password'];

    if ($validacao->naoPassou('login')) {

        header("Location: /login");

        exit();

    }

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
        flash()->push('mensagem', "Seja bem-vindo" . $usuario->nome . "!");
        header('location: /');
        exit();
    }

}   

view('login');

?>