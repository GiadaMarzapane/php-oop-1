<?php

// creazione classe movie
class Movie {
    public $title;
    public $director;
    public $duration;
    private $year_of_release;
    private $genreArray = array();

    function __construct(string $_title){
        $this->title = $_title;
    }

    public function setYear($year_of_release){
        if(is_string($year_of_release)){
            echo 'Errore, inserisci un anno valido';
        }
        else{
            $this->year_of_release = $year_of_release;
        }
    }
    public function getYear(){
        return $this->year_of_release;
    }
    
    // funzioni per aggiungere più di un genere

    public function addGenre($genre){
        $this->genreArray[] = $genre;
    }

    public function getGenres(){
        return $this->genreArray;
    }
}

// istanza di due oggetti con classe Movie
$reservoir_dogs = new Movie('Reservoir Dogs');
$reservoir_dogs->director = 'Quentin Tarantino';
$reservoir_dogs->duration = 99;
$reservoir_dogs->setYear(1992);
$reservoir_dogs->getYear();
$reservoir_dogs->addGenre('Drammatico');
$reservoir_dogs->addGenre('Gangster');
$reservoir_dogs->addGenre('Noir');
$reservoir_dogs->getGenres();
var_dump($reservoir_dogs);

echo '<br>';

$pulp_fiction = new Movie('Pulp Fiction');
$pulp_fiction->director = 'Quentin Tarantino';
$pulp_fiction->duration = 154;
$pulp_fiction->setYear(1994);
$pulp_fiction->getYear();
$pulp_fiction->addGenre('Drammatico');
$pulp_fiction->addGenre('Gangster');
$pulp_fiction->addGenre('Noir');
$pulp_fiction->addGenre('Thriller');
$pulp_fiction->getGenres();
var_dump($pulp_fiction);