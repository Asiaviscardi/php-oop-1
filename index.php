<?php

require_once __DIR__ . "/model/Movie.php";

$movies = [

    new Movie (
        'img/Biancaneve.jpg', 
        'Biancaneve e i sette nani', 
        'il primo lungometraggio animato della storia realizzato in animazione tradizionale, uscito nelle sale cinematografiche nel 1937. Quando nel 1934 Walt Disney rese pubblico al New York Times questo progetto, tutti lo definirono Disney’s Folly, ovvero “la follia di Disney”.'
    ),

    new Movie (
        'img/Pinocchio.jpg',
        'Pinocchio',
        'uscito al cinema nel 1940 e penalizzato nella sua diffusione dallo scoppio della Seconda Guerra Mondiale. Come il precedente film, anche Pinocchio è basato su una fiaba: l’ispirazione è in questo caso il romanzo per ragazzi di fine 800 Le avventure di Pinocchio di Carlo Collodi.'
    ),
];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

    <title>Film Disney</title>

  </head>

  <body>
    <div class="container">
    <?php
    foreach($movies as $movie):
    ?>
    <div class="card m-4" style="width: 18rem;">
    <img src="<?php echo $movie->image; ?>" class="card-img-top" alt="">
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php  echo $movie->title; ?></h5>
        <p class="card-text"><?php  echo $movie->description; ?></p>

    </div>
    <?php
    endforeach;
    ?>
  </body>
</html>