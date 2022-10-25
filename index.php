<?php
// create un file index.php in cui:
// - è definita una classe ‘Movie’
 //  => all'interno della classe sono dichiarate delle variabili d'istanza
 //  => all'interno della classe è definito un costruttore
  // => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */

class Movie {
    public $name;
    
   public function bestMovie() {
    echo "Best movie is Maigret";
   }
    
   bestMovie();
    
}


// Variabili d'Istanza
$watcher = new Movie();
$maigret = new Movie(); 
$siccità = new Movie();

$watcher->name = "Watcher";
$maigret->name = "Maigret";
$siccità->name = "Siccità";

var_dump($watcher);
var_dump($maigret);
var_dump($siccità);

