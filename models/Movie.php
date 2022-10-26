<?php
// create un file index.php in cui:
// - è definita una classe ‘Movie’
 //  => all'interno della classe sono dichiarate delle variabili d'istanza
 //  => all'interno della classe è definito un costruttore
  // => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

class Movie {
  public $title;
  public $director;
  public $genre = '';
  public $actors = [];
  public $language = '';
  public $year;
  public $duration = 0;
  public $description = '';

  function __construct($_title,$_director = ''){
    $this->title = $_title;
    $this->director = $_director;

  }

  public function addActor($_actor){
    if (in_array($_actor,$this->actors)){
      $this->actors[] = $_actor;
    }
    $this->actors[] = $_actor;
  }



}
 // $movie = new Movie('Back to the future','Robert Zemeckis');
 

