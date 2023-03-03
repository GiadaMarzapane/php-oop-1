<?php
class Movie {
    public $title;
    public $director;
    public $duration;
    private $year_of_release;
    public $genre;

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
}

$reservoir_dogs = new Movie('Reservoir Dogs');
$reservoir_dogs->director = 'Quentin Tarantino';
$reservoir_dogs->duration = 99;
$reservoir_dogs->genre = 'Drammatico';
$reservoir_dogs->setYear(1992);
$reservoir_dogs->getYear();
var_dump($reservoir_dogs);

echo '<br>';

$pulp_fiction = new Movie('Pulp Fiction');
$pulp_fiction->director = 'Quentin Tarantino';
$pulp_fiction->duration = 154;
$pulp_fiction->genre = 'Drammatico';
$pulp_fiction->setYear(1994);
$pulp_fiction->getYear();
var_dump($pulp_fiction);