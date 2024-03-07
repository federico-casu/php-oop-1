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
    public $originalTitle;
    public $duration;
    public $releaseDate;
    public $genre = [];
    public $characters = [];
    public $vote;
    public $author;

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

    public function addGenre($newGenre){
        $this->genre[] = $newGenre;
    }

    public function addCharacter($character_name, $actor_name, $actor_surname, $actor_age) {
        $this->characters[] = new Character($character_name, new Actor($actor_name, $actor_surname, $actor_age));
    }
}

class Character {
    public $name;
    public $actor;
    public $parents = [];
    public $sons = [];
    public $partner = [];
    public $author;

    function __construct($_name, Actor $_actor)
    {
        $this->name = $_name;
        $this->actor = $_actor;
    }

    public function addParent($parent) {
        $this->parents[] = $parent;
    }

    public function addSon($son) {
        $this->sons[] = $son;
    }

    public function addPartner($partner) {
        $this->partner[] = $partner;
    }
}

class Actor {
    public $name;
    public $surname;
    public $age;

    function __construct($_name, $_surname, $_age)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }
}

$film1 = new Movie('Guerre Stellari', 181);
$film1->originalTitle = 'Star Wars';
$film1->releaseDate = '1977-05-25';
$film1->addGenre('Fantascienza');
$film1->addGenre('Avventura');
$film1->addGenre('Azione');
$film1->addGenre('Fantastico');
$film1->author = 'George Lucas';
$film1->addCharacter('Luke Skywalker', 'Mark', 'Hamill', 72);
$film1->addCharacter('Obi-Wan Kenobi', 'Alec', 'Guinnes', '1914-2000');
$film1->vote = 10;

var_dump($film1);

$film2 = new Movie('Il Signore degli Anelli - La Compagnia dell\'Anello', 178);
$film2->originalTitle = 'The Lord of the Rings: The Fellowship of the Ring';
$film2->releaseDate = '2001-12-19';
$film2->addGenre('Epico');
$film2->addGenre('Drammatico');
$film2->addGenre('Avventura');
$film2->addGenre('Azione');
$film2->addGenre('Fantastico');
$film2->author = 'Peter Jackson';
$film2->addCharacter('Frodo Baggins', 'Elijah', 'Wood', 43);
$film2->addCharacter('Gandalf il Grigio', 'Ian', 'McKellen', 84);
$film2->vote = 10;

var_dump($film2);

#var_dump($film2->characters[1]?->actor);