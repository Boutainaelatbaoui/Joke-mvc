<?php
require_once '../config.php';

class Joke extends Connection
{

    public $id;
    public $text;

    function __construct($text = null, $id = null)
    {
        $this->text = $text;
        $this->id = $id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    public function allJokes()
    {
        $sql = "SELECT * FROM jokes";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function deleteJoke()
    {
        $sql = "DELETE FROM jokes WHERE id = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);
    }
}