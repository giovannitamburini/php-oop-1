<?php

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

// aggrego i film(oggetti) in un array
$Movies[] = $interstellar;
$Movies[] = $inception;
$Movies[] = $oppenheimer;