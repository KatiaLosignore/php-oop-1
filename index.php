<?php

require_once __DIR__ .'/Models/Genre.php';
require_once __DIR__ .'/Models/Movie.php';


$genres = [
    new Genre('Fantasy'),
    new Genre('Action')
];

$starwars = new Movie('Star Wars', 'George Lucas','02:30h', '1977', $genres);



$genres= [
    new Genre('Dramatic'),
    new Genre('Romantic')
];

$titanic = new Movie('Titanic','James Cameron', '03:15h', '1997', $genres);


echo $starwars->getInformationMovie(); 

echo '<br />';

echo $titanic->getInformationMovie();