<?php
class Movie {
    public $title;
    public $director;
    public $duration;
    public $year_of_release;
}

$reservoir_dogs = new Movie();
$reservoir_dogs->title = 'Reservoir Dogs';
$reservoir_dogs->director = 'Quentin Tarantino';
$reservoir_dogs->duration = '99';
$reservoir_dogs->year_of_release = '1992';
var_dump($reservoir_dogs);


$pulp_fiction = new Movie();
$pulp_fiction->title = 'Pulp Fiction';
$pulp_fiction->director = 'Quentin Tarantino';
$pulp_fiction->duration = '154';
$pulp_fiction->year_of_release = '1994';
var_dump($pulp_fiction);