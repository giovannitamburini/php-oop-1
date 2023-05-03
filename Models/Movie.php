<?php

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
        $this->genre = implode(', ', $genre);
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