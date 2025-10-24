<?php

class DB
{

    private function getConnection()
    {
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

        return $pdo;
    }

    public function livros()
    {

        $pdo = $this->getConnection();

        $sql = "select * from books";

        $query = $pdo->query($sql);
        $itens = $query->fetchAll();


        return array_map(fn($item) => Livro::make($item), $itens);
    }

    public function livro($id)
    {
        $pdo = $this->getConnection();
        $sql = "select * from books where id =" . $id;

        $query = $pdo->query($sql);
        $itens = $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $itens)[0];


    }
}

?>