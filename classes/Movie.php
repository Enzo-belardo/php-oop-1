<?php

class Movie{

    public $title;
    public $actors;
    public $genere;


    public function __construct($_title, $_actors, $_genere){
        $this->title = $_title;
        $this->actors = $_actors;
        $this->genere = $_genere;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getActors(){
        return $this->actors;
    }
    public function getGenere(){
        return $this->genere;
    }

}

?>