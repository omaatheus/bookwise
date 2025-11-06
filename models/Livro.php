<?php

class Livro{
    public $id;
    public $title;
    public $author;
    public $description;
    public $release_year;
    public $user_id;
    public $note_rating;
    public $count_rating;
    public $image;

    public function query($where, $params)
    {

        return (new DB)->query(

            query: "
            
                select
        
                    l.id,
                    l.title,
                    l.author,
                    l.description,
                    l.release_year,
                    l.image,
                    round(sum(a.note) / 5.0) as note_rating,
                    count(a.id) as count_rating
        
                from
        
                    books l
        
                left join reviews a on a.book_id = l.id
        
                where $where
        
                group by
        
                    l.id,
                    l.title,
                    l.author,
                    l.description,
                    l.release_year,
                    l.image;

        
            ",
        
            class: self::class,
        
            params: $params
        
        ); 

    }

    public static function get($id)
    {

        return (new self)->query('l.id = :id', ['id' => $id])->fetch();

    }

    public static function all($filtro)
    {

        return (new self)->query('l.title like :filtro', ['filtro' => "%$filtro%"])->fetchAll();

    }

    public static function meus($usuario_id)
    {

        return (new self)->query('l.user_id = :usuario_id', ['usuario_id' => $usuario_id])->fetchAll();

    }
}

?>