<?php

class Genre 
{
    public $label;

    public function __construct($label)
    {
        $this->label = $label;
    }
}


class Movie 
{
    public $title;
    public $director;
    public $duration;
    public $year;
    public $genre;

    public function __construct($title, $director, $duration, $year, Genre $genre)
    {
        $this->title = $title;
        $this->director = $director;
        $this->duration = $duration;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getInformationMovie() 
    {
        $genre_label = $this->genre->label;
        return "Title: $this->title , Director: $this->director , Year: $this->year, Genre: $genre_label";
    }

}

$fantasy = new Genre ('Fantasy');
$starwars = new Movie('Star Wars', 'George Lucas','02:30h', '1977', $fantasy);

$dramatic = new Genre ('Dramatic');
$titanic = new Movie('Titanic','James Cameron', '03:15h', '1997', $dramatic);


echo $starwars->getInformationMovie(); 

echo '<br />';

echo $titanic->getInformationMovie();