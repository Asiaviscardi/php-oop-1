<?php

require 'db.php';

class Movie{
    public $image;
    public $title;
    public $description;
    
    public function __construct($image, $title, $description){
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
    }
    
    // Metodo per ottenere l'immagine del film:
    
    public function getImage(){
        return $this->image;
    }
    
    // Metodo per ottenere il titolo del film:
    
    public function getTitle(){
        return $this->title;
    }
    
    // Metodo per ottenere la descrizione del film:
    
    public function getDescription(){
        return $this->description;
    }
}


echo $movie1->getImage();
echo 'titolo:'. $movie1->getTitle();
echo 'descrizione:' . $movie1->getDescription();
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <title>Film Disney</title>

</head>

<body>
    <div class="container-fluid">
    <?php
    foreach($movies as $movie):
    ?>
    <div class="card m-4" style="width: 18rem;">
    <img src="img/<?php echo $movie->getImage?>" class="card-img-top" alt="<?php echo $movie->image?>">
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php  echo $movie->getTitle ?></h5>
        <p class="card-text"><?php  echo implode(", " , $movie->getDescription) ?></p>

    </div>
    <?php
    endforeach;
    ?>


    </div>
    
</body>

</html>