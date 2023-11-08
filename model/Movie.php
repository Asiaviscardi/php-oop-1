<?php

class Production {
  public $title;
  public $description;

  public function __construct($title, $description) {
      $this->title = $title;
      $this->description = $description;
  }

  public function getTitle() {
      return $this->title;
  }

  public function getDescription() {
      return $this->description;
  }
}

class Movie extends Production{
  public $image;

  public function __construct($title, $description, $image) {
    parent::__construct($title, $description);
    $this->image = $image;
}

  public function getImage(){
    return $this->image;
}
}

class TvSeries extends Production {
  public $seasons;

  public function __construct($title, $description, $seasons) {
      parent::__construct($title, $description);
      $this->seasons = $seasons;
  }

  public function getSeasons() {
      return $this->seasons;
  }
}
