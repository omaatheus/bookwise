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

    public function livros($pesquisa = null)
    {
        $prepare = $this->getConnection()->prepare("select * from books where user_id = 1 and title like :pesquisa");
        $prepare->bindValue(":pesquisa", "%$pesquisa%");
        $prepare->execute();

        return $prepare->fetchAll(PDO::FETCH_CLASS, Livro::class);


        
    }

    public function livro($id)
    {
        $pdo = $this->getConnection();
        $sql = "select * from books where id =" . $id;

        $prepare = $this->getConnection()->prepare("select * from books where id = :id");
        $prepare->bindValue(":id", $id);
        $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $prepare->execute();
        return $prepare->fetch();

    }
}

?>