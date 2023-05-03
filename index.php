<?php

/*
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/


// definisco la classe Movie
class Movie
{
    // definisco le variabili di istanza
    public $title;
    public $genre;
    public $year;
    public $mainCharacter;
    public $price;
    public $discount;
    public $finalPrice;

    // definisco un costruttore (per rendere obbligatorio l'indicazione dei dati)
    function __construct(string $title, string $genre, int $year, string $mainCharacter, int $price)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->mainCharacter = $mainCharacter;
        $this->price = $price;

        $this->setDiscount($year);
        $this->setFinalPrice($price, $this->setDiscount($year));
    }

    public function setDiscount($year)
    {
        $movieAge = date("Y") - $year;
        if ($movieAge > 2) {

            $this->discount = 30;
            return $this->discount;

        } else {

            $this->discount = 0;
            return $this->discount;
        }
    }

    public function setFinalPrice($price, $discount)
    {
        $this->finalPrice = ($price * (100 - $discount) / 100);
    }
}

// istanzio una nuova entità, cioè un nuovo oggetto
$interstellar = new Movie("Interstellar", "science fiction", 2014, "Matthew McConaughey", 15);

// istanzio una nuova entità, cioè un nuovo oggetto
$inception = new Movie("Inception", "science fiction", 2010, "Leonardo DiCaprio", 10);

// istanzio una nuova entità, cioè un nuovo oggetto
$oppenheimer = new Movie("Oppenheimer", "biographical", 2023, "Cillian Murphy", 20);

// stampo a schermo le nuova entità con i valori delle relative proprietà
var_dump($interstellar, $inception, $oppenheimer);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Class</title>
</head>

<body>

</body>

</html>