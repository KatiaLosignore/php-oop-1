<?php
 
 include __DIR__ .'/data/db.php'; 
 
 
 ?>



<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ .'/includes/head.php' ?>


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