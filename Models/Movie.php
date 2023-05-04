<?php

require_once __DIR__ .'/Genre.php';

class Movie 
{
    public $title;
    public $director;
    public $duration;
    public $year;
    public $genres;

    public function __construct($title, $director, $duration, $year, array $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->duration = $duration;
        $this->year = $year;
        $this->genres = $genres;


        foreach ($genres as $genre) {
            if (!$genre instanceof Genre) {
                echo 'Ogni genere deve essere una instanza della classe Genre!';
                die();
            }
        }
    }

    public function getGenre() {

        $genre_name = '';
        foreach( $this->genres as $genre ) {
            if ($this->genres[count($this->genres) - 1] !== $genre) {
                $genre_name .= $genre->label .',';
            } else {
                $genre_name .= $genre->label;
            }
           
        }

        return $genre_name;

    }

    public function getInformationMovie() 
    {
        

        return "Title: $this->title , Director: $this->director , Year: $this->year , ".$this->getGenre();

    }

}

