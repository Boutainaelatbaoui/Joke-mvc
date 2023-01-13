<?php
require_once '../config.php';

class JokeForm extends Connection
{
    public $id;
    public $text;

    function __construct($text = null, $id = null)
    {
        $this->text = $text;
        $this->id = $id;
    }

    public function saveJoke()
    {
        $sql = "INSERT INTO jokes (`text`) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->text]);
    }

    public function updateJoke()
    {
        $sql = "UPDATE `jokes` SET `text`= ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->text, $this->id]);
        // var_dump($stmt);
        // die;
    }

}