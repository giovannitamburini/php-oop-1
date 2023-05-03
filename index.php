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


    // definisco un costruttore (per rendere obbligatorio l'indicazione dei dati)
    function __construct(string $title, string $genre, int $year, string $mainCharacter)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->$mainCharacter = $mainCharacter;
    }
}
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