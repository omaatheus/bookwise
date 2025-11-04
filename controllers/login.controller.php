<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $regras = [
        'email' => ['required', 'email'],
        'password' => ['required', 'min:6'],
    ];

   
    $validacao = Validacao::validar($regras, $_POST);

    if ($validacao->naoPassou('login')) {
        header("Location: /login");
        exit();
    }

    $usuario = (new DB)->query(
        query: "select * from users where email = :email", 
        class: Usuario::class,
        params: [
            "email" => $email,
        ]
    )->fetch();

    if ($usuario) {

        if(!password_verify($_POST["password"], $usuario->password)){
            flash()->push('validacoes_login', ['Usuario ou senha estão incorretos.']);
            header('location: /login');
            exit(); 
        }
        $_SESSION['auth'] = $usuario;
        flash()->push('mensagem', "Seja bem-vindo " . $usuario->name . "!");
        header('Location: /');
        exit();
    }

    flash()->push('mensagem', 'Email ou senha inválidos.');
    header('Location: /login');
    exit();
}   

view('login');
