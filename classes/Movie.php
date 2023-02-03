<?php

class Movie{

    public $title;
    public $actors;
    public $genere;


    public function __construct($_title, $_actors, $_genere){
        $this->title = $_title;
        $this->actors = $_actors;
        $this->name = $_genere;
    }

}

$movieUno = new Movie('Titanic', ['Leornardo Di Caprio','Kate Winslet'] , 'Drammatico');

$movieDue = new Movie('Prova a prendermi', ['Leornardo Di Caprio','Tom Hanks'] , 'Azione');

var_dump($movieUno,$movieDue)


?>