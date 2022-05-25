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
    public function __construct( $_title, $_length, $_genre, $_watch) {
        $this->title = $_title;
        $this->length = $_length;
        $this->genre = $_genre;
        $this->watch = $_watch;
    }
    // Create a function that define if you watch the movie
    public function setWatch($_result) {
        if($_result === true){
            var_dump("I've watched this Movie");
        } else {
            var_dump("I have to watch this Movie");
        }
    }

    

 }

// Create the movie Objects
 $trainspotting = new Movie('trainspotting', 140, 'drama', false);
 $avengers = new Movie('Avengers - Infinity War', 230, 'action', false);
 $batman = new Movie('Batman - The Dark Kinght', 220, 'thriller', false);
 // Invoke and save the function response
 $result = $trainspotting->setWatch(true); $avengers->setWatch(false); $batman->setWatch(false);
 // show the Movie objects
 var_dump($trainspotting, $avengers, $batman, $result);
