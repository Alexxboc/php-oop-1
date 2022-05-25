<?php

class Movie {
    public $title;
    public $length;
    public $genre;

    public function __construct( $_title, $_length, $_genre) {
        $this->title = $_title;
        $this->length = $_length;
        $this->genre = $_genre;
    }

 }

 $trainspotting = new Movie('trainspotting', 140, 'drama');
 $avengers = new Movie('Avengers - Infinity War', 230, 'action');
 $batman = new Movie('Batman - The Dark Kinght', 220, 'thriller');



 var_dump($trainspotting, $avengers, $batman);
