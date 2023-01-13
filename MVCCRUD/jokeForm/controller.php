<?php
require_once '../model/jokeForm.php';

if (isset($_POST['save'])) {
    extract($_POST);
    $joke = new JokeForm($text);
    $joke->saveJoke();
    header('location: ../public/index.php');
}

if (isset($_POST['update'])) {
    extract($_POST);
    // var_dump($id);
    // die;
    $joke = new JokeForm($text, $id);
    $joke->updateJoke();
    header('location: ../public/index.php');
}
