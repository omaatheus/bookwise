<?php 

class DB{

    public function livros(){

        $host = '127.0.0.1';
        $port = '3307'; 
        $database = 'bookwise-db';  
        $user = 'admin';   
        $pass = 'bookwise123';      
        $charset = 'utf8mb4';    

        $dsn = "mysql:host=$host;port=$port;dbname=$database;charset=$charset";


        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        $pdo = new PDO($dsn, $user, $pass, $options);

        $query = $pdo->query("select * from books");
        $itens = $query->fetchAll();

        $retorno = [];

        foreach($itens as $item){
            $livro = new Livro;

            $livro->id = $item['id'];
            $livro->title = $item['title'];
            $livro->author = $item['author'];
            $livro->description = $item['description'];

            $retorno []= $livro;

        }


        return $retorno;
    }
};


?>