<?php

require_once __DIR__ .'/Genre.php';


class Movie 
{
    public $title;
    public $director;
    public $duration;
    public $year;
    public $poster;
    public $genres;

    public function __construct($title, $director, $duration, $year, $poster, array $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->duration = $duration;
        $this->year = $year;
        $this->poster = $poster;
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
        $last_genre = $this->genres[count($this->genres) - 1];
        foreach( $this->genres as $genre ) {
            if ( $genre === $last_genre) {
                $genre_name .= $genre->label;
            } else {
                $genre_name .= $genre->label .',';
            }
           
        }

        return $genre_name;

    }

    public function getInformationMovie() 
    {
        

        return "Title: $this->title , Director: $this->director , Year: $this->year , ".$this->getGenre();

    }

}

