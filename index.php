<!-- 

Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

 -->
<?php


// Create new class Movie
class Movie {
    // Define variables
    public $title;
    public $length;
    public $genre;
    public $watch;
    // Create a new constructor function
    public function __construct( $_title, $_length, $_genre) {
        $this->title = $_title;
        $this->length = $_length;
        $this->genre = $_genre;
    }

    public function setWatch($watch) {
        $this->watch = $watch;
    }

    public function getWatch() {
        return $this->watch;
    }
    // Create a function that define if you watch the movie
    public function watchMovie($_result) {
        if($_result === true){
            var_dump("I've watched this Movie");
        } else {
            var_dump("I have to watch this Movie");
        }
    }

    

 }
 
 // Create the movie Objects
 $trainspotting = new Movie('trainspotting', 140, 'drama');
 $trainspotting->setWatch(true);
 $trainspotting->watchMovie($trainspotting->getWatch());
 $avengers = new Movie('Avengers - Infinity War', 230, 'action');
 $avengers->setWatch(false);
 $avengers->watchMovie($avengers->getWatch());
 $batman = new Movie('Batman - The Dark Kinght', 220, 'thriller');
 $batman->setWatch(true);
 $batman->watchMovie($batman->getWatch());
 
 
 // show the Movie objects
 var_dump($trainspotting, $avengers, $batman);
