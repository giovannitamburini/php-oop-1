<?php

session_start();

require_once './Models/Movie.php';

if (isset($_POST['title']) && isset($_POST['genre']) && isset($_POST['year']) && isset($_POST['mainCharacter']) && isset($_POST['price'])) {

    $newMovie = new Movie($_POST['title'], explode(',', $_POST['genre']), $_POST['year'], $_POST['mainCharacter'], $_POST['price']);

    $_SESSION['movies'][] = $newMovie;

    header("Location: index.php");
}
;