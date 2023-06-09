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


// importo la componente contentenente la classe Movie
require_once './Models/Movie.php';

// importo la componente in cui istanzio le nuove entità di Movie e le inserisco all'interno dell'array $Movies
require_once './Models/db.php';

session_start();

if (!isset($_SESSION['movies'])) {

    $_SESSION['movies'] = $Movies;
}

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
    <?php
    include './Views/partials/header.php';
    ?>

    <div class="container pt-3">

        <h2>Movie of
            <!-- prendo il valore della variabile statica dalla componente contenente la classe Movie -->
            <?= Movie::$director ?>
        </h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Year</th>
                    <th scope="col">Main Character</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Final Price</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($_SESSION['movies'] as $singleMovie) {
                    ?>

                    <tr>
                        <td>
                            <?= $singleMovie->title ?>
                        </td>
                        <td>
                            <?= $singleMovie->genre ?>
                        </td>
                        <td>
                            <?= $singleMovie->year ?>
                        </td>
                        <td>
                            <?= $singleMovie->mainCharacter ?>
                        </td>
                        <td>
                            <?= $singleMovie->price ?> $
                        </td>
                        <td>
                            <?= $singleMovie->discount ?> %
                        </td>
                        <td>
                            <?= $singleMovie->finalPrice ?> $
                        </td>

                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>

        <form action="addMovie.php" method="POST">
            <input type="text" name="title" placeholder="title" required>
            <input type="text" name="genre" placeholder="genre" required>
            <input type="number" name="year" placeholder="year" required>
            <input type="text" name="mainCharacter" placeholder="mainCharacter" required>
            <input type="number" name="price" placeholder="price" required>

            <button type="sumbit">Add</button>
        </form>

    </div>


    <?php
    include './Views/partials/footer.php';
    ?>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>