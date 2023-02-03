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

$titanic = new Movie('prova' , 'prova' , 'prova');
var_dump($titanic)


?>