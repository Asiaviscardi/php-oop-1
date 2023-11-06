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