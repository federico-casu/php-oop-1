<?php

/*

    Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

*/

class Movie {
    public $title;
    public $duration;

    function __construct($_title, $_duration)
    {
        $this->title = $_title;
        $this->duration = $_duration;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDuration() {
        return $this->duration;
    }
}

$film1 = new Movie('Il Diavolo veste Prada', 120);
$film2 = new Movie('Titanic', 180);

var_dump($film1, $film2);

echo $film2->getTitle();
echo $film2->getDuration();
echo $film1->getTitle();
echo $film1->getDuration();