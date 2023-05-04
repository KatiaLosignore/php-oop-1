<?php

require_once __DIR__ .'/../Models/Genre.php';
require_once __DIR__ .'/../Models/Movie.php';


$genres = [
    new Genre('Fantasy'),
    new Genre('Action')
];

$starwars = new Movie('Star Wars', 'George Lucas','02:30 h', '1977', 'https://multiplayer.net-cdn.it/thumbs/images/2023/04/07/star_wars_jpg_1600x900_crop_q85.jpg' , $genres);



$genres= [
    new Genre('Dramatic'),
    new Genre('Romantic')
];

$titanic = new Movie('Titanic','James Cameron', '03:15 h', '1997', 'https://www.valseriana.eu/wp-content/uploads/2023/02/titanic-1024x576-2.jpeg' , $genres);


$movies = [$starwars, $titanic];