<?php

class Movie{
    public $image;
    public $title;
    public $description;
}

public function __construct($image, $title, $description){
    $this->image = $image;
    $this->title = $title;
    $this->description = $description;
}

// Metodo per ottenere il titolo del film:

public function getTitle(){
    return $this->title;
}

// Metodo per ottenere la descrizione del film:

public function getDescription(){
    return $this->description;
}

?>    