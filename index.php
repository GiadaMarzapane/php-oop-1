<?php

// creazione classe movie
class Movie
{
    public $title;
    public $director;
    public $duration;
    private $year_of_release;
    private $genreArray = array();

    function __construct(string $_title, int $_duration, string $_director = 'Quentin Tarantino')
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->duration = $_duration;
    }

    public function setYear($year_of_release)
    {
        if (is_string($year_of_release)) {
            echo 'Errore, inserisci un anno valido';
        } else {
            $this->year_of_release = $year_of_release;
        }
    }
    public function getYear()
    {
        return $this->year_of_release;
    }

    // funzioni per aggiungere più di un genere

    public function addGenre($genre)
    {
        $this->genreArray[] = $genre;
    }

    public function getGenres()
    {
        return $this->genreArray;
    }
}

// istanza di due oggetti con classe Movie
$reservoir_dogs = new Movie('Reservoir Dogs', 99);
$reservoir_dogs->setYear(1992);
$reservoir_dogs->getYear();
$reservoir_dogs->addGenre('Drammatico');
$reservoir_dogs->addGenre('Gangster');
$reservoir_dogs->addGenre('Noir');
$reservoir_dogs->getGenres();
var_dump($reservoir_dogs);

echo '<br>';
echo '<br>';

$pulp_fiction = new Movie('Pulp Fiction', 154);
$pulp_fiction->setYear(1994);
$pulp_fiction->getYear();
$pulp_fiction->addGenre('Drammatico');
$pulp_fiction->addGenre('Gangster');
$pulp_fiction->addGenre('Noir');
$pulp_fiction->addGenre('Thriller');
$pulp_fiction->getGenres();
var_dump($pulp_fiction);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>

    <h1>Tarantino Movies</h1>

    <div>
        <h2>
            Titolo:
            <?php echo $reservoir_dogs->title ?>
        </h2>
        <h3>
            Regista:
            <?php echo $reservoir_dogs->director ?>
        </h3>
        <h3>
            Durata: <?php echo $reservoir_dogs->duration ?> min
        </h3>
        <h3>
            Anno di uscita: <?php echo $reservoir_dogs->getYear() ?>
        </h3>
        <h3>
            Genere: <?php
            for ($i=0; $i < count($reservoir_dogs->getGenres()); $i++) { 
                echo $reservoir_dogs->getGenres()[$i] . ' ';
            } ?>
        </h3>
    </div>

</body>

</html>