<?php
class Genre
{
    private $genre;
    public function __construct($_genre)
    {
        $this->genre = $_genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }
}



?>