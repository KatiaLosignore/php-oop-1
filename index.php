<?php
 
 include __DIR__ .'/data/db.php'; 
 
 
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body class="bg-primary-subtle">
    <header class="text-center mb-5 p-5">
        <h1 class="fs-1 text-uppercase text-primary">Movies</h1>
    </header>
    <main>
       <div class="container">
            <div class="row">
                <?php foreach($movies as $movie) { ?>
                    <div class="col-6">
                        <div class="card">
                            <img src="<?php echo $movie->poster ?>" class="card-img-top" alt="<?php echo $movie->title?>">
                            <div class="card-body">
                                <div class="card-title fs-4 fw-semibold mb-4 text-primary">Title: <?php echo $movie->title ?></div>
                                <div class="card-title fw-bold mb-3">Director: <?php echo $movie->director ?></div>
                                <p class="card-text fw-bold"> Duration: <?php echo $movie->duration ?></p>
                                <p class="card-text fw-bold"> Year: <?php echo $movie->year ?></p>
                                <p class="card-text fw-bold"> Genres: <?php echo $movie->getGenre() ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

       </div> 
    </main>
    
</body>
</html>