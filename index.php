<?php

/*
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
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

    public static $director = "Christopher Nolan";

    // definisco un costruttore (per rendere obbligatorio l'indicazione dei dati)
    // costruttore base, senza un array
    // function __construct(string $title, string $genre, int $year, string $mainCharacter, int $price)

    // costruttore con array per il genere
    function __construct(string $title, array $genre, int $year, string $mainCharacter, int $price)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->mainCharacter = $mainCharacter;
        $this->price = $price;

        // eseguo i metodi di questa classe nel momento in cui istanzio dei suoi oggetti
        $this->setDiscount($year);
        $this->setFinalPrice($price, $this->setDiscount($year));
    }

    // funzione per calcolare il valore dello sconto ottenibile tramite l'"età" del film
    public function setDiscount($year)
    {
        // calcolo la differenza tra l'anno corrente e l'anno di uscita del film per ottenere l'età del film
        $movieAge = date("Y") - $year;

        if ($movieAge > 2) {

            $this->discount = 30;
            return $this->discount;

        } else {

            $this->discount = 0;
            return $this->discount;
        }
    }

    // metodo per calcolare il prezzo finale tramite il prezzo e il valore dello sconto(ottenuto dalla funzione sopracitata "setDiscount")
    public function setFinalPrice($price, $discount)
    {
        $this->finalPrice = ($price * (100 - $discount) / 100);
    }
}

// istanzio una nuova entità, cioè un nuovo oggetto
// versione senza array
// $interstellar = new Movie("Interstellar", "science fiction", 2014, "Matthew McConaughey", 15);
//versione con array
$interstellar = new Movie("Interstellar", ["science fiction", "adventure"], 2014, "Matthew McConaughey", 15);

// istanzio una nuova entità, cioè un nuovo oggetto
//versione senza array
// $inception = new Movie("Inception", "science fiction", 2010, "Leonardo DiCaprio", 10);
// versione con array
$inception = new Movie("Inception", ["science fiction", "action"], 2010, "Leonardo DiCaprio", 10);


// istanzio una nuova entità, cioè un nuovo oggetto
// versione senza array
// $oppenheimer = new Movie("Oppenheimer", "biographical", 2023, "Cillian Murphy", 20);
// versione con array
$oppenheimer = new Movie("Oppenheimer", ["biographical", "dramatic", "historical"], 2023, "Cillian Murphy", 20);

// stampo a schermo la variabile statica
var_dump(Movie::$director);

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

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>