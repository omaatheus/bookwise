<?php

class Livro{
    public $id;
    public $title;
    public $author;
    public $description;

    public static function make($item){
            $livro = new self;
            $livro->id = $item['id'];
            $livro->title = $item['title'];
            $livro->author = $item['author'];
            $livro->description = $item['description'];
            return $livro;
           
    }

}

?>