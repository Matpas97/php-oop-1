<?php

require_once __DIR__. '/models/Movie.php';

$movie = new Movie('Back to the future','Robert Zemeckis');
$movie->addActor('Michael J. Fox');
$movie->addActor('Cristopher Loyd');
$movie->year = 1986;
$movie->duration = 90;
$movie->description = 'Un tipo torna nel passato e ci prova con sua madre';

var_dump($movie);


?>