<?php
require_once '../model/jokeList.php';

if (isset($_GET['id'])) {
    extract($_GET);
    $joke = new Joke();
    $joke->setId($id);
    $joke->deleteJoke();
    header('location: ../public/index.php');
}


