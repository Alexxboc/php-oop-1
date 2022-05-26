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
    public function __construct(String $_title, Int $_length,String $_genre,Bool $_watch) {
        $this->title = $_title;
        $this->length = $_length;
        $this->genre = $_genre;
        $this->watch = $_watch;
    }
     // Create a function that define if you watch the movie
    public function watchMovie() {
        if($this->watch === true){
            var_dump("I've watched this Movie");
        } else {
            var_dump("I have to watch this Movie");
        }
    }

    

 }
 

 $movies = [
    new Movie('trainspotting', 140, 'drama',true),
    new Movie('Avengers - Infinity War', 230, 'action', false),
    new Movie('Batman - The Dark Kinght', 220, 'thriller', true)
];

 // show the Movies objects
 var_dump($movies);
